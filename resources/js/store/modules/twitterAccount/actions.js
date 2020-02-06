import { OK } from '../../../util'

const actions = {
    fetchTwitterAccounts: ({ commit }) => {
        return axios.get("/api/twitter-accounts")
            .then(response => {
                commit("SET_TWITTER_ACCOUNTS", response.data);
                return response.data;
            })
        ;
    },
    fetchTwitterAccount: ({ commit }, id) => {
        return axios.get(`/api/twitter-account/${id}`)
          .then(response => {
            if (response.status !== OK) {
                throw new Error(response);
            }
            commit("SET_TWITTER_ACCOUNT", response.data);
            return response.data;
          })
        ;
    },
    updateTwitterAccount: ({ commit }, twitterAccount) => {
        commit('loading/setLoadingFlg', true, {root: true})
        return axios.put(`/api/twitter-account/${twitterAccount.id}`, twitterAccount)
            .then(response => {
                commit('loading/setLoadingFlg', false, {root: true})

                if (response.status !== OK) {
                    throw new Error(response);
                }
    
                commit("SET_TWITTER_ACCOUNTS", response.data);
                return response.data;
            })
        ;
    },
    deleteTwitterAccount: ({ commit }, twitterAccount) => {
        return axios.delete(`/api/twitter-account/${twitterAccount.id}`)
            .then(response => {
                if (response.status !== OK) {
                    throw new Error(response);
                }

                commit("SET_TWITTER_ACCOUNTS", response.data);
                return response.data;
            })
        ;
    },

    addTargetTwitterAccount: ({ commit }, { twitterAccount, name }) => {
        commit('loading/setLoadingFlg', true, {root: true})
        return axios.get(`/api/twitter-account/${twitterAccount.id}/check-by/${name}`)
            .then(response => {
                commit('loading/setLoadingFlg', false, {root: true})
                
                if (response.status !== OK) {
                    throw new Error(response);
                }
    
                commit("ADD_TARGET_TWITTER_ACCOUNT", response.data);
                return response.data;
            })
        ;
    },
    deleteTargetTwitterAccounts: ({ commit }, { ids }) => {
        commit("DELETE_TARGET_TWITTER_ACCOUNTS", ids);
    },

    addTargetTwitterFollowKeyword: ({ commit }, data) => {
        commit("ADD_TARGET_TWITTER_FOLLOW_KEYWORD", data);
    },
    deleteTargetTwitterFollowKeywords: ({ commit }, { ids }) => {
        commit("DELETE_TARGET_TWITTER_FOLLOW_KEYWORDS", ids);
    },

    addTargetTwitterLikeKeyword: ({ commit }, data) => {
        commit("ADD_TARGET_TWITTER_LIKE_KEYWORD", data);
    },
    deleteTargetTwitterLikeKeywords: ({ commit }, { ids }) => {
        commit("DELETE_TARGET_TWITTER_LIKE_KEYWORDS", ids);
    },
};

export default actions;
