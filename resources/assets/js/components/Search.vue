<template>
    <div class="container">
        <div class="row">
            <div class="panel">
                <input type="text" class="input" placeholder="Enter name..." v-model="name" v-on:keyup="autoComplete">
                <div class="switch-field">
                    <input v-on:change="autoComplete" type="radio" id="male" v-model="sex" value="M" checked/>
                    <label for="male">Boy</label>

                    <input v-on:change="autoComplete" type="radio" id="female" v-model="sex" value="F" />
                    <label for="female">Girl</label>
                </div>
            </div>
        </div>
        <div>
            <graph v-if="this.values && this.labels" id="myChart" :labels="this.labels" :values="this.values" :sex="this.sex" :name="this.name" :backgroundColor="this.backgroundColor" :borderColor="this.borderColor" :legendSex="this.legendSex"></graph>
        </div>
    </div>
</template>

<script>
    import Graph from '../components/Graph.vue';

    export default {
        components: { Graph },

        data() {
            return {
                name: '',
                sex: '',
                labels: '',
                values: '',
                results: []
            }
        },

        computed: {
            legendSex: function () {
                if (this.sex == 'M') {
                    return 'boy'
                } else {
                    return 'girl';
                }
            },

            borderColor: function () {
                if (this.sex == 'M') {
                    return 'rgba(54, 162, 235, 1)';
                } else {
                    return 'rgba(255,99,132,1)';
                }
            },

            backgroundColor: function () {
                if (this.sex == 'M') {
                    return 'rgba(54, 162, 235, 0.2)';
                } else {
                    return 'rgba(255, 99, 132, 0.2)';
                }
            }
        },

        methods: {
            autoComplete() {
                this.results = [];
                this.labels = '';
                this.values = '';
                if (this.name.length > 2) {
                    axios.get('/names', {
                        params: {name: this.name, sex: this.sex}
                    }).then(response => {
                        this.labels = Object.keys(response.data);
                        this.values = Object.values(response.data);
                    });
                }
            }
        }
    }
</script>
