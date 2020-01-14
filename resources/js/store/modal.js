//モーダルの出し分けについて

const state = {
  modalFlg: null
}

const mutations = {
  setModalFlg (state, modalFlg) {
    state.modalFlg = modalFlg
  }
}


export default {
  namespaced: true,
  state,
  mutations
}
