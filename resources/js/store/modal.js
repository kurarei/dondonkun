//モーダルの出し分けについて

const state = {
  modalFlg: null
}

const mutations = {
  setModalFlg (state, modalFlg) {
    console.log('bbb');
    state.modalFlg = modalFlg
  }
}

const getters = {
  modalFlg: state => !! state.modalFlg
}

export default {
  namespaced: true,
  state,
  mutations,
  getters
}
