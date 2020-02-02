const mutations = {
    SET_TWITTER_ACCOUNTS: (state, value) => {
        state.twitterAccounts = value;
    },
    SET_TWITTER_ACCOUNT: (state, value) => {
        state.twitterAccount = value;
    }
};

export default mutations;
