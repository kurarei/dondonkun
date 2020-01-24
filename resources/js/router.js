import Vue from 'vue'
import VueRouter from 'vue-router'
import store from './store'

//ログイン後
import Mypage from './components/Mypage'
import Account from "./components/Account";
import Setting from "./components/Setting";
import Tweet from "./components/Tweet";
import Nav from './componentsSub/Nav'
import Logout from "./componentsSub/Logout";
import UserSetting from "./componentsSub/UserSetting";
import PassSetting from "./componentsSub/PassSetting";


//ログイン前
import Top from './componentsTop/Top'
import TopNav from './componentsTop/TopNav'
import Login from './componentsTop/Login'
import Register from './componentsTop/Register'
import SystemError from './errors/System'
import NotFound from './errors/NotFound'
import PassReset from "./componentsTop/PassReset";
import PassResetForm from "./componentsTop/PassResetForm";

// VueRouterプラグインを使用する
// これによって<RouterView />コンポーネントなどを使うことができる
Vue.use(VueRouter)

// パスとコンポーネントのマッピング
//トップ画面
const routes = [
  {
    path: '',
    components: {
      main: Top,
      menu: TopNav
    },
    //beforeEnterを付けることで、URLに直接入力された際の認証チェックを管理している
    //https://router.vuejs.org/ja/guide/advanced/navigation-guards.html
    beforeEnter (to, from, next) {
      if (store.getters['auth/check']) {
        next('/mypage')
      } else {
        next()
      }
    }
  },

  //ログイン画面
  {
    path: '/login',
    components: {
      main: Top,
      menu: Login
    },
    beforeEnter (to, from, next) {
      if (store.getters['auth/check']) {
        next('/mypage')
      } else {
        next()
      }
    }
  },

  //新規登録
  {
    path: '/register',
    components: {
      main: Top,
      menu: Register
    },
    beforeEnter (to, from, next) {
      if (store.getters['auth/check']) {
        next('/mypage')
      } else {
        next()
      }
    }
  },
  //マイページ
  {
    path: '/mypage',
    components: {
      main: Mypage,
      menu: Nav
    },
    beforeEnter (to, from, next) {
      if (store.getters['auth/check']) {
        next()
      } else {
        next('/')
      }
    }
  },
  //ログアウト
  {
    path: '/logout',
    components: {
      main: Mypage,
      menu: Logout
    },
    beforeEnter (to, from, next) {
      if (store.getters['auth/check']) {
        next()
      } else {
        next('/')
      }
    }
  },
  //ユーザー設定
  {
    path: '/userSetting',
    components: {
      main: Mypage,
      menu: UserSetting
    },
    beforeEnter (to, from, next) {
      if (store.getters['auth/check']) {
        next()
      } else {
        next('/')
      }
    }
  },
  //パスワード変更
  {
    path: '/passSetting',
    components: {
      main: Mypage,
      menu: PassSetting
    },
    beforeEnter (to, from, next) {
      if (store.getters['auth/check']) {
        next()
      } else {
        next('/')
      }
    }
  },
  //アカウント解除
  {
    path: '/account',
    components: {
      main: Mypage,
      menu: Account
    },
    beforeEnter (to, from, next) {
      if (store.getters['auth/check']) {
        next()
      } else {
        next('/')
      }
    }
  },
  //自動設定
  {
    path: '/setting',
    components: {
      main: Setting,
      menu: Nav
    },
    beforeEnter (to, from, next) {
      if (store.getters['auth/check']) {
        next()
      } else {
        next('/')
      }
    }
  },
  //自動ツイート
  {
    path: '/tweet',
    components: {
      main: Tweet,
      menu: Nav
    },
    beforeEnter (to, from, next) {
      if (store.getters['auth/check']) {
        next()
      } else {
        next('/')
      }
    }
  },
  //パスワードリマインダー
  {
    path: '/passReset',
    components: {
      main: Top,
      menu: PassReset
    },
    beforeEnter (to, from, next) {
      if (store.getters['auth/check']) {
        next('/mypage')
      } else {
        next()
      }
    }
  },
  //パスワード再設定が作れない
  {
    path: '/password/reset/:token',
    components: {
      main: Top,
      menu: PassResetForm
    },
    beforeEnter (to, from, next) {
      if (store.getters['auth/check']) {
        next('/mypage')
      } else {
        store.commit('modal/setModalFlg', true)
        next()
      }
    }
  },

  //TODO 任意のURLを入力された際の挙動
  {
    path: '/500',
    component: SystemError
  },
  {
    path: '*',
    component: {
      main: NotFound,
      menu: Nav
    }
  },

]

// VueRouterインスタンスを作成する
const router = new VueRouter({
  mode: 'history', //#が出ないように追加
  routes
})

// VueRouterインスタンスをエクスポートする
// app.jsでインポートするため
export default router



