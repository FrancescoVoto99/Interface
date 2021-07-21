<template>
  <v-app dark>
    <v-container fluid grid-list-lg>
      <v-layout row wrap>
        <v-data-table
          :headers="headers"
          :items="items"
          v-model="selected"
          select-all
          hide-actions
          class="elevation-1"
          item-key="randomId"
        >
          <template slot="items" slot-scope="props">
            <table-row :data="props.item" @rowSelected="addSelection" />
          </template>
        </v-data-table>
      </v-layout>
    </v-container>
  </v-app>
</template>


<script>

import tableRow from "./row.vue";

export default {
  
  data() {
    return {
      search: "",
      selected: [],
      pagination: { rowsPerPage: 18 },
      headers: [
        {
          text: "Dessert (100g serving)",
          align: "left",
          sortable: false,
          value: "name"
        },
        { text: "Calories", value: "calories" },
        { text: "Fat (g)", value: "fat" },
        { text: "Carbs (g)", value: "carbs" },
        { text: "Protein (g)", value: "protein" },
        { text: "Sodium (mg)", value: "sodium" },
        { text: "Calcium (%)", value: "calcium" },
        { text: "Iron (%)", value: "iron" }
      ],
      items: [
        {
          randomId: Math.random()
            .toString(36)
            .substring(7),
          value: false,
          name: "Frozen Yogurt",
          calories: 159,
          fat: 6.0,
          carbs: 24,
          protein: 4.0,
          sodium: 87,
          calcium: "14%",
          iron: "1%"
        }
      ]
    };
  },
  components: {
    tableRow
  },
  methods: {
    addSelection(item) {
      if (item.selected) {
        this.selected.push(item.item);
      } else {
        this.selected = this.selected.filter(
          s => s.randomId !== item.item.randomId
        );
      }
    }
  },
  created() {
    for (let i = 0; i < 15; ++i) {
      var randomId = Math.random()
        .toString(36)
        .substring(7);

      this.items.push({
        randomId: randomId,
        value: false,
        name: "Frozen Yogurt",
        calories: 159,
        fat: 6.0,
        carbs: 24,
        protein: 4.0,
        sodium: 87,
        calcium: "14%",
        iron: "1%"
      });
    }
  }
};
</script>

<style></style>
