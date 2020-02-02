import { OK, NOT_FOUND } from '../../../util'

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
            if (response.status === OK) {
                commit("SET_TWITTER_ACCOUNT", response.data);
            } else if (response.status === NOT_FOUND) {
                throw new Error(response);
            }
          })
        ;
    },
    deleteTwitterAccount: ({ commit }, twitterAccount) => {
        return axios.delete(`/api/twitter-account/${twitterAccount.id}`)
            .then(response => {
                commit("SET_TWITTER_ACCOUNTS", response.data);
                return response.data;
            })
        ;
    },
};

export default actions;
