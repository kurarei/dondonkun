import Vue from 'vue'
import Vuex from 'vuex'

import auth from './auth'
import error from './error'
import modal from "./modal"
import loading from "./loading";
import message from "./message";
import twitterAccount from './modules/twitterAccount'

Vue.use(Vuex)

const store = new Vuex.Store({
  modules: {
    auth,
    error,
    modal,
    loading,
    message,
    twitterAccount
  }
})

export default store
