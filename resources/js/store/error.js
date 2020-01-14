//コンポーネントを跨いでエラー情報を扱うerrorストアモジュール
const state = {
  code: null
}

const mutations = {
  setCode (state, code) {
    state.code = code
  }
}

export default {
  namespaced: true,
  state,
  mutations
}
