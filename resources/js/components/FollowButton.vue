<template>
    <div>
        <button
          class="btn-sm shadow-none border border-primary p-2"
          :class="buttonColor"
        >
          <i
          class="mr-1"
          :class="buttonIcon"
          ></i>
          {{ buttonText }}
        </button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isFollowBy: false,
        }
    },
    computed: {
        buttonColor(){
            return this.isFollowBy
              ?'bg-primary text-white'
              :'bg-white'
        },
        buttonIcon(){
            return this.isFollowBy
            ?'fas fa-user-check'
            :'fas fa-user-plus'
        },
        buttonText(){
            return this.isFollowBy
            ?'フォロー中'
            :'フォロー'
        }
    }
}
</script>