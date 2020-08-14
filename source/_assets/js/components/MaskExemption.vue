<template>
    <div class="text-center">

        <div class="mb-4 max-w-lg mx-auto">
            <div>
                <input type="text" v-model="header" class="p-4 rounded border-black border-2 w-full  text-white shadow mb-2 bg-tertiary"/>
            </div>

            <div>
                <input type="text" v-model="caption" class="p-4 rounded border-black border-2 w-full text-white shadow bg-tertiary" />
            </div>
        </div>



        <div class="max-w-lg mx-auto text-left mb-8">
            <div id="render-meme" class="img-container relative">
                <img src="/img/mask-exemption-template.png" class="rounded shadow-md "/>
                <div class="meme-text">
                    <span class="meme-header text-5xl font-black">
                    {{ header }}
                </span>
                    <span class="meme-caption italic">
                    {{ caption }}
                </span>
                </div>

            </div>

            <div class="text-center">
                <button class="button mx-auto" @click="download">Download</button>
            </div>

        </div>

    </div>
</template>

<script>
    import domtoimage from 'dom-to-image';
    export default {
        data() {
            return {
                header: "I cannot wear a mask or face covering",
                caption: "Please give me 2 metres of space.",
            }
        },

        methods: {
            download() {
                let node = document.getElementById('render-meme');
                domtoimage.toPng(node)
                    .then(function (dataUrl) {
                        let link = document.createElement('a');
                        link.download = 'exemption-card.png';
                        link.href = dataUrl;
                        link.click();
                    });
            }
        },

        mounted()
        {
            let presets = [
                {
                    header: 'I cannot properly navigate roundabouts',
                    caption: 'To me, they are the traffic equivalent of a sudoku puzzle'
                },
                {
                    header: 'I cannot use my signal lights',
                    caption: 'Prepare yourself for some unpredictable sh*t'
                },
                {
                    header: "I cannot wear a mask or face covering",
                    caption: "Please give me 2 metres of space."
                },
                {
                    header: "I cannot pay taxes or parking tickets",
                    caption: "Please don't bother trying to collect payment."
                },
                {
                    header: "I am going to sneeze in your face",
                    caption: "Here comes the mucus!!!"
                },
                {
                    header: "I cannot chew quietly",
                    caption: "You better hope those Beats By Dre headphones go to 11."
                },
                {
                    header: "I can have more than 6 cats and 3 dogs in my household",
                    caption: "It won't smell too bad."
                },
                {
                    header: "Hello.",
                    caption: "My name is Inigo Montoya. You killed my father. Prepare to die."
                },
                {
                    header: "I cannot make the playoffs",
                    caption: "I think high draft picks are worth more than cups."
                },
                {
                    header: "Get out of jail free card",
                    caption: "This card may be kept until needed or sold."
                },
                {
                    header: "My blue lamborghini is not too loud",
                    caption: "It's accessible so even the hard of hearing can enjoy it."
                },
                {
                    header: "I only vote no",
                    caption: "Vote yes to me being mayor."
                },
            ];

            let preset = presets[Math.floor(Math.random() * presets.length)];

            this.header = preset.header;
            this.caption = preset.caption;
        }
    }

</script>

<style>
    .meme-text {
        color: rgb(240, 213, 192);
        position:absolute;
        top:220px;
        left:100px;
        transform: rotate(10.6deg);
        text-shadow: 7px 10px 8px rgb(156,54,10);
        font-family: 'Roboto Slab', serif;
    }
    .meme-header {
        display: block;
        width:500px;
        font-size: 3rem;
        padding-bottom: 1rem;
    }

    .meme-caption {
        display:block;
        font-size: 22px;
        line-height: 1.5em;
        width:350px;
    }
</style>
