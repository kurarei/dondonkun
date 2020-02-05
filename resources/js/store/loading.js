//loadingの出し分けについて

const state = {
  loadingFlg: null
}

const mutations = {
  setLoadingFlg (state, loadingFlg) {
    state.loadingFlg = loadingFlg
  }
}

const getters = {
  loadingFlg: state => !! state.loadingFlg
}

export default {
  namespaced: true,
  state,
  mutations,
  getters
}
