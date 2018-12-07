<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Pengguna;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->redirect(['site/main']);
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(['main']);
            // return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['main']);
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(['site/login']);

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionMain()
    {
        if(!isset(Yii::$app->user->identity->id_pengguna))
            return $this->redirect(['site/login']);
        return $this->render('main');
    }

    public function actionRegister()
    {
        $model = new Pengguna();

        if ($model->load(Yii::$app->request->post())) {
            $model->katalaluan = md5($model->katalaluan);
            $model->katalaluan_ulang = $model->katalaluan;
            if($model->save())
                return $this->redirect(['view', 'id' => $model->id_pengguna]);
            return print_r($model->getErrors());
        }
        return $this->render('register', [
            'model' => $model,
        ]);
    }

    public function actionForgot()
    {
        $model = new Pengguna();
        $status = 0;
        
        if ($model->load(Yii::$app->request->post())) {
            $no_kp = Yii::$app->request->post('Pengguna')['no_kp'];
            $email = Yii::$app->request->post('Pengguna')['email'];
            $pengguna = Pengguna::find()->where(['no_kp' => $no_kp, 'email' => $email])->all();
            $total_pengguna = count($pengguna);
            if ($total_pengguna > 0) {
                Yii::$app->mailer->compose()
                    ->setTo($email)
                    ->setFrom([$pengguna[0]->email => $pengguna[0]->nama])
                    ->setSubject('katalaluan 3PPPeL')
                    ->setTextBody('katalaluan adalah '.$pengguna[0]->katalaluan)
                    ->send();

                $status = 1;
            }
            else
                $status = 2;
        }
        
        return $this->render('forgot', ['model' => $model, 'status' => $status]);
    }

    // public function actionTest()
    // {
    //     $x = [1];
    //     $total = is_array($x) ? count($x) : 0;
    //     echo $total;
    // }
}
