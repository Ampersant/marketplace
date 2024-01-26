<script>
    export default{
        data(){
            return{
                penis: "Да, думаю в 15 будет нормально",
            }
        },
        methods: {
            termin(){
                this.$refs.blz.style.opacity = '1'
                this.$refs.blz.style.transform = 'rotateZ(-20deg)'
                this.$refs.blz.style.color = 'red'
            }
        }
    }
</script>
 <template>
    <h1 @click="termin">Antwort</h1>
    <br><br><br>
    <h1 class="bla" ref="blz">{{ penis }}</h1>
 </template>

<style>
    .bla{
        transform: translateX(100px);
        opacity: 0;
        transition: 1s;
        font-size: 4em;
    }
</style>