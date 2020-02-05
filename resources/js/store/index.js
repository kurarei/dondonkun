import Vue from 'vue'
import Vuex from 'vuex'

import auth from './auth'
import error from './error'
import modal from "./modal"
import loading from "./loading";
import twitterAccount from './modules/twitterAccount'

Vue.use(Vuex)

const store = new Vuex.Store({
  modules: {
    auth,
    error,
    modal,
    loading,
    twitterAccount
  }
})

export default store
