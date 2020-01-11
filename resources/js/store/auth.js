//認証関係のストア

const state = {
  //ログイン済みユーザーを保持
  user: null

}

const getters = {
  check: state => !! state.user,
  username: state => state.user ? state.user.name : ''

}

const mutations = {
  //userステート値を更新する
  setUser(state, user){
    state.user = user
  }

}

const actions = {
  //会員登録 アクション→コミットでミューテーション呼び出し→ステート更新
  async register(context, data){
    const response = await axios.post('/api/register', data)
    context.commit('setUser', response.data)
  },
  //ログイン アクション→コミットでミューテーション呼び出し→ステート更新
  async login (context, data) {
    const response = await axios.post('/api/login', data)
    context.commit('setUser', response.data)
  },
  //ログアウト userステートをnullに変更
  async logout (context) {
    const response = await axios.post('/api/logout')
    context.commit('setUser', null)
  },
  //
  async currentUser (context) {
    const response = await axios.get('/api/user')
    const user = response.data || null
    context.commit('setUser', user)
  }
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}
