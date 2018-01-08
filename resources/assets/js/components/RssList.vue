<template>
  <div>
    <v-ons-page>
      <v-ons-toolbar>
        <div class="center">Home</div>
      </v-ons-toolbar>

      <v-ons-list>
        <template v-for='item in items'>
          <v-ons-list-item tappable @click="transition(item.link)">
            <div class="list-item-content">{{ item.title }}</div>
          </v-ons-list-item>
        </template>
      </v-ons-list>
    </v-ons-page>
  </div>
</template>

<script>
export default {
    created() {
        this.fetchItems();
    },
    data() {
        return {
            items: []
        }
    },
    methods: {
        fetchItems() {
            axios.get('/api/rss')
            .then(response =>  {
                this.items = response.data.items;
            });
        },
        transition(link) {
          location.href = link;
        }
    }
}
</script>

<style>
.list-item {
  height: 80px;
}
.list-item__center {
  height: 80px;
  position: absolute;
  align-items: baseline;
}
.list-item-content {
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
}
</style>
