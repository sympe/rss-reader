<template>
  <div>
    <v-ons-page>
      <v-ons-toolbar>
        <div class="center">Home</div>
      </v-ons-toolbar>

      <v-ons-list>
        <template v-for='item in items'>
          <v-ons-list-item>
            <v-ons-card @click="transition(item.link)">
              <div class="title">{{ item.title }}</div>
              <div class="content">{{ item.description }}</div>
            </v-ons-card>
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
