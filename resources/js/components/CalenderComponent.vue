<template>
    <div id="container">
        <ul>
            <li v-for="tab in tabNames">
                <a href="#" v-on:click.prepend="onclick(tab)">@{{ tabs[tab] }}</a>
            </li>
        </ul>
        <keep-alive>
            <div class="container tab">
                <div class="row">
                    <div class="col-md-12">
                        <div class="justify-content-center">
                            <div class="card">
                                <component v-bind:is="currentTab"></component>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </keep-alive>
    </div>
</template>

<script>
Vue.component ('tab-access', {
            template: `<div class="tab">
            <div class="card-header">
            <h1>アクセス</h1>
        </div>
        <article>
        </article>
        </div>`
        })
        Vue.component ('tab-concept', {
            template: `<div class="tab">
            <div class="card-header menu">
                                <h1>コンセプト</h1></div>
                                <div class="col-md-11 mt-3">
                                    <article>
                                    </article>
                                </div>
                            </div>`
        })
        Vue.component ('tab-contact', {
            template: `<div class="tab">
            <div class="card-header menu">
            <h1>お問い合わせ</h1>
        </div>
        <div class="col-md-11 mt-3">
            <article>
            </article>
        </div>
        </div>`
        })

    export default {
        mounted() {
            console.log('Component mounted.')
        },
         data () {
        return {

            current: 'access',
            tabs: {
                'access': 'アクセス',
                'concept': 'コンセプト',
                'contact': 'お問い合わせ'
            },
        }
    },
     computed: {
                tabNames: function() {
                    return Object.keys(this.tabs);
                },
                currentTab: function() {
                    return 'tab-' + this.current;
                }
            },
    methods: {
        onclick: function(tab) {
            this.current = tab;
        }
    },
    }


</script>
