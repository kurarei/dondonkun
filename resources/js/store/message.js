//メッセージの出し分けについて

const state = {
  messageFlg: 1,
  messege: '完了しました'
}

const mutations = {
  setMessageFlg (state, messageFlg) {
    state.messageFlg = messageFlg
  },
  setMessage (state, message) {
    state.message = message
  }
}

const getters = {
  messageFlg: state => !! state.messageFlg,
  message: state => !! state.message,
}

export default {
  namespaced: true,
  state,
  mutations,
  getters
}
