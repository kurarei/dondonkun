//ステータスコードの読み込み
import { OK, CREATED, UNPROCESSABLE_ENTITY } from '../util'

const state = {
  //ログイン済みユーザーを保持
  user: null,
  //APIの呼び出しが成功したかを表すステート。コンポーネント側ではこのステートを参照して後続処理の判断をする
  apiStatus: null,
  //ログインバリデーション
  loginErrorMessages: null,
  //登録バリデーション
  registerErrorMessages: null
}

const getters = {
  check: state => !! state.user,
  // username: state => state.user ? state.user.name : ''

}

const mutations = {
  //userステート値を更新する
  setUser(state, user){
    state.user = user
  },
  //エラーハンドリングの一環
  setApiStatus (state, status) {
    state.apiStatus = status
  },
  //ログインバリデーション
  setLoginErrorMessages (state, messages) {
    state.loginErrorMessages = messages
  },
  setRegisterErrorMessages (state, messages) {
    state.registerErrorMessages = messages
  }
}

const actions = {
  //会員登録 アクション→コミットでミューテーション呼び出し→ステート更新
  async register (context, data){
    context.commit('setApiStatus', null)
    const response = await axios.post('/api/register', data)

    if (response.status === CREATED){
      context.commit('setApiStatus', true)
      context.commit('setUser', response.data)
      return false
    }

    context.commit('setApiStatus', false)
    if (response.status === UNPROCESSABLE_ENTITY){
      context.commit('setRegisterErrorMessages', response.data.errors)
    } else {
      context.commit('error/setCode', response.status, {root: true})
    }
  },


  // ログイン アクション→コミットでミューテーション呼び出し→ステート更新
  async login (context, data) {
    context.commit('setApiStatus', null)
    const response = await axios.post('/api/login', data)
      // .catch(err => err.response || err)

    if (response.status === OK) {
      context.commit('setApiStatus', true)
      context.commit('setUser', response.data)
      return false
    }

    context.commit('setApiStatus', false)
    if (response.status === UNPROCESSABLE_ENTITY) {
      context.commit('setLoginErrorMessages', response.data.errors)
    } else {
      context.commit('error/setCode', response.status, { root: true })
    }
  },


  //ログアウト userステートをnullに変更
  async logout (context) {
    context.commit('setApiStatus', null)
    const response = await axios.post('/api/logout')

    if (response.status === OK) {
      context.commit('setApiStatus', true)
      context.commit('setUser', null)
      return false
    }

    context.commit('setApiStatus', false)
    context.commit('error/setCode', response.status, { root: true })
  },

  //ログインユーザーチェック
  async currentUser (context) {
    context.commit('setApiStatus', null)
    const response = await axios.get('/api/user')
    const user = response.data || null

    if (response.status === OK) {
      context.commit('setApiStatus', true)
      context.commit('setUser', user)
      return false
    }

    context.commit('setApiStatus', false)
    context.commit('error/setCode', response.status, { root: true })
  }
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}
