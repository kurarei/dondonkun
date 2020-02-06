//メッセージの出し分けについて

const state = {
  messageFlg: 1
}

const mutations = {
  setMassageFlg (state, messageFlg) {
    state.messageFlg = messageFlg
  }
}

const getters = {
  messageFlg: state => !! state.messageFlg
}

export default {
  namespaced: true,
  state,
  mutations,
  getters
}
