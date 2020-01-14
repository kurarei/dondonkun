import Vue from 'vue'
import Vuex from 'vuex'

import auth from './auth'
import error from './error'
import modal from "./modal";

Vue.use(Vuex)

const store = new Vuex.Store({
  modules: {
    auth,
    error,
    modal
  }
})

export default store
