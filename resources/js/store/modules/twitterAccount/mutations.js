const mutations = {
    SET_TWITTER_ACCOUNTS: (state, value) => {
        state.twitterAccounts = value;
    },
    SET_TWITTER_ACCOUNT: (state, value) => {
        state.twitterAccount = value;
    },

    ADD_TARGET_TWITTER_ACCOUNT: (state, value) => {
        if (!state.twitterAccount.target_twitter_accounts || state.twitterAccount.target_twitter_accounts.length === 0) {
            state.twitterAccount.target_twitter_accounts = [];
        }
        state.twitterAccount.target_twitter_accounts.push(value);
    },
    DELETE_TARGET_TWITTER_ACCOUNTS: (state, value) => {
        state.twitterAccount.target_twitter_accounts = state.twitterAccount.target_twitter_accounts.filter(item => !value.includes(item.uid))
    },

    ADD_TARGET_TWITTER_FOLLOW_KEYWORD: (state, value) => {
        if (!state.twitterAccount.target_twitter_follow_keywords || state.twitterAccount.target_twitter_follow_keywords.length === 0) {
            state.twitterAccount.target_twitter_follow_keywords = [];
        }
        state.twitterAccount.target_twitter_follow_keywords.push(value);
    },
    DELETE_TARGET_TWITTER_FOLLOW_KEYWORDS: (state, value) => {
        state.twitterAccount.target_twitter_follow_keywords = state.twitterAccount.target_twitter_follow_keywords.filter(item => !value.includes(`${item.condition} ${item.word}`))
    },

    ADD_TARGET_TWITTER_LIKE_KEYWORD: (state, value) => {
        if (!state.twitterAccount.target_twitter_like_keywords || state.twitterAccount.target_twitter_like_keywords.length === 0) {
            state.twitterAccount.target_twitter_like_keywords = [];
        }
        state.twitterAccount.target_twitter_like_keywords.push(value);
    },
    DELETE_TARGET_TWITTER_LIKE_KEYWORDS: (state, value) => {
        state.twitterAccount.target_twitter_like_keywords = state.twitterAccount.target_twitter_like_keywords.filter(item => !value.includes(`${item.condition} ${item.word}`))
    }
};

export default mutations;
