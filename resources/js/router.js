import Vue from 'vue'
import VueRouter from 'vue-router'

//コンポーネントをインポート

import Top from './components/Top'
import Mypage from './components/Mypage'

// VueRouterプラグインを使用する
// これによって<RouterView />コンポーネントなどを使うことができる
Vue.use(VueRouter)

// パスとコンポーネントのマッピング
const routes = [
  {
    path: '/',
    component: Top
  },
  {
    path: '/mypage',
    component:Mypage
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
