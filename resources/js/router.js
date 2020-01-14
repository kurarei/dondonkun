import Vue from 'vue'
import VueRouter from 'vue-router'
import store from './store'
//コンポーネントをインポート

import Top from './components/Top'
import Mypage from './components/Mypage'
import TopNav from './components/TopNav'
import Login from './components/Login'
import Register from './components/Register'
import Nav from './components/Nav'
import Logout from "./components/logout";
import SystemError from './errors/System'

// VueRouterプラグインを使用する
// これによって<RouterView />コンポーネントなどを使うことができる
Vue.use(VueRouter)

// パスとコンポーネントのマッピング
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
  {
    path: '/mypage/logout',
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
  {
    path: '/500',
    component: SystemError
  }

]

// VueRouterインスタンスを作成する
const router = new VueRouter({
  mode: 'history', //#が出ないように追加
  routes
})

// VueRouterインスタンスをエクスポートする
// app.jsでインポートするため
export default router



