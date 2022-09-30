<template>
    <div class="text-center">

        <div class="mb-4 max-w-4xl mx-auto">
            <div>
                <input type="text" v-model="caption" class="p-4 rounded border-black border-2 w-full text-white shadow bg-tertiary" />
            </div>
        </div>



        <div class="max-w-4xl mx-auto text-left mb-8">
            <div id="render-meme" class="img-container relative">
                <img src="/img/alberta-calling-template.png" class="rounded shadow-md "/>
                <div class="calling-text">
                <span class="calling-caption font-black uppercase leading-tight">
                    {{ caption }}
                </span>
                </div>

            </div>

            <div class="text-center mt-4">
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
                caption: "Thank god for call display",
            }
        },

        methods: {
            download() {
                let node = document.getElementById('render-meme');
                domtoimage.toPng(node)
                    .then(function (dataUrl) {
                        let link = document.createElement('a');
                        link.download = 'alberta-is-calling.png';
                        link.href = dataUrl;
                        link.click();
                    });
            }
        },

        mounted()
        {
            let presets = [
                {
                    caption: "thank god for call display"
                },
                {
                    caption: "we have no rats"
                },
                {
                    caption: "press 1 to accept the charges for this call"
                },
                {
                    caption: "a racial slur"
                },
                {
                    caption: "rachel notley - i mean winter - is coming"
                }
            ];

            let preset = presets[Math.floor(Math.random() * presets.length)];

            this.header = preset.header;
            this.caption = preset.caption;
        }
    }

</script>

<style>
    .calling-text {
        color: rgb(217, 172, 91);
        position:absolute;
        top:500px;
        left:140px;
        font-size: 4rem;
    }
    .meme-header {
        display: block;
        width:500px;
        font-size: 3rem;
        padding-bottom: 1rem;
    }

    .calling-caption {
        display:block;
    }
</style>
