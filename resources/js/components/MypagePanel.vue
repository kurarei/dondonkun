<template>
  <section class="p-panel">
    <div class="p-panel__account">
      <div class="p-panel__img"><a class="c-img__circle" :href="'https://twitter.com/' + nickname" target="_blank"><img class="c-img__icon" :src="avatar" alt="Twitterのアイコン"></a></div>
      <div class="p-panel__name">
        <div class="p-panel__name--name"><a  :href="'https://twitter.com/' + nickname" target="_blank">{{ name }}</a></div>
        <div class=""><a  :href="'https://twitter.com/' + nickname" target="_blank">@{{ nickname }}</a></div>
      </div>
    </div>
    <div class="p-panel__auto">
      <div class="p-panel__setting">
        <RouterLink :to="`/setting/${id}`">
          <div class=""><button class="c-button__auto"><i class="fa fa-user-cog"></i> 自動化設定</button></div>
        </RouterLink>
        <RouterLink :to="`/tweet/${id}`"><div class="">
          <button class="c-button__auto"><i class="fa fa-comment"></i> 自動ツイート</button></div>
        </RouterLink>
      </div>
      <div class="p-panel__button">
        <table class="c-table">
          <tr>
            <td><i class="fa fa-user-plus"></i> フォロー</td>

            <td>
              <div class="c-button__run">
                <input
                  :id="`followSwitch${id}`"
                  type="checkbox"
                  :value="following"
                  :checked="following"
                  @change="changeFollowing"
                >
                <label :for="`followSwitch${id}`"><span></span></label>
                <div id="swImg"></div>
              </div>
            </td>

          </tr>
          <tr>
            <td><i class="fa fa-user-times"></i> アンフォロー</td>
            <td><div class="c-button__run">
              <input
                :id="`unfollowSwitch${id}`"
                type="checkbox"
                :value="unfollowing"
                :checked="unfollowing"
                @change="changeUnfollowing"
              >
              <label :for="`unfollowSwitch${id}`"><span></span></label>
              <div id="swImg"></div>
            </div></td>
          </tr>
          <tr>
            <td><i class="fa fa-heart"></i> いいね</td>
            <td><div class="c-button__run">
              <input
                :id="`likeSwitch${id}`"
                type="checkbox"
                :value="liking"
                :checked="liking"
                @change="changeLiking"
              >
              <label :for="`likeSwitch${id}`"><span></span></label>
              <div id="swImg"></div>
            </div></td>
          </tr>
        </table>
      </div>

    </div>
  </section>


</template>

<script>
  import { OK } from '../util'
  export default {
    props: {
      id: {
          type: Number,
          require: true,
          default: null
      },
      nickname: {
          type: String,
          require: true,
          default: null
      },
      name: {
          type: String,
          require: true,
          default: null
      },
      avatar: {
          type: String,
          require: true,
          default: null
      },
      following: {
          type: Boolean,
          require: true,
          default: false
      },
      unfollowing: {
          type: Boolean,
          require: true,
          default: false
      },
      liking: {
          type: Boolean,
          require: true,
          default: false
      }
    },
    methods: {
      changeFollowing($event) {
        axios.patch(`/api/twitter-account/${this.id}/change-following`)
            .then(response => {
                if (response.status !== OK) {
                    throw new Error(response);
                }
                this.$emit('update:following', Boolean($event.target.value))
            })
      },
      changeUnfollowing($event) {
        axios.patch(`/api/twitter-account/${this.id}/change-unfollowing`)
          .then(response => {
            if (response.status !== OK) {
                throw new Error(response);
            }
            this.$emit('update:unfollowing', Boolean($event.target.value))
          })
      },
      changeLiking($event) {
        axios.patch(`/api/twitter-account/${this.id}/change-liking`)
          .then(response => {
            if (response.status !== OK) {
                throw new Error(response);
            }
            this.$emit('update:liking', Boolean($event.target.value))
          })
      }
    }
  }
</script>
