import Vue from 'vue'
// ルーティングの定義をインポートする
import router from './router'
//ストアを使えるようにする
import store from './store'
// ルートコンポーネントをインポートする
import App from './App.vue'
//CSRF対策
import './bootstrap'

const createApp = async () => {
  await store.dispatch('auth/currentUser')

  new Vue({
    el: '#app',
    router,                   // ルーティングの定義を読み込む
    store,                    //ストアの使用
    components: { App },      // ルートコンポーネントの使用を宣言する
    template: '<App />'       // ルートコンポーネントを描画する
  })
}

createApp()
