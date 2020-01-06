import Vue from 'vue'
import VueRouter from 'vue-router'

//コンポーネントをインポート

import Top from './components/Top'
import Mypage from './components/Mypage'
import TopNav from './components/TopNav'
import Login from './components/Login'
import Register from './components/Register'
import Nav from './components/Nav'

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
    }

  },
  {
    path: '/login',
    components: {
      main: Top,
      menu: Login
    }

  },
  {
    path: '/register',
    components: {
      main: Top,
      menu: Register
    }

  },
  {
    path: '/mypage',
    components: {
      main: Mypage,
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



