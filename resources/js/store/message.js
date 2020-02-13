//メッセージの出し分けについて

const state = {
  message: null
}

const actions = {
  setMessage: ({ commit }, message) => {
    commit("setMessage", message);
    if (message) {
      setTimeout(() => commit("setMessage", null), 5000);
    }
  }
}

const mutations = {
  setMessage (state, message) {
    state.message = message
  }
}

const getters = {
  messageFlg: state => !!state.message,
  message: state => state.message
}

export default {
  namespaced: true,
  state,
  actions,
  mutations,
  getters
}
