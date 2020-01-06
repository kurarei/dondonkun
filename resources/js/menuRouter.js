import Vue from 'vue'
import VueRouter from 'vue-router'


//コンポーネントをインポート
import Nav from './components/Nav'
import Login from './components/Login'

Vue.use(VueRouter)

const routes = [
  {
    path: '',
    component: Nav,
  },
  {
    path: 'login',
    component: Login
  }
]

//VueRouterインスタンスを作成する
const router = new VueRouter({
  mode: 'history', //#が出ないように追加
  routes
})

export default router
