//認証関係のストア

const state = {
  //ログイン済みユーザーを保持
  user: null

}

const getters = {}

const mutations = {
  //userステート値を更新する
  setUser(state, user){
    state.user = user
  }

}

const actions = {
  //会員登録 アクション→コミットでミューテーション呼び出し→ステート更新
  async register(context, data){
    // const response = await axios.post('/api/register', data)
    const response = await axios.post('/api/register', { text: this.text })
    context.commit('setUser', response.data)
  }

}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}
