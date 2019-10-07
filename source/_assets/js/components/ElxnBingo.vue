<template>
    <div>
        <div class="flex text-center mx-auto justify-center flex-wrap cursor-pointer">
            <div
                    v-for="word in words"
                    :class="[ (markedWords.includes(word)) ? 'bg-green' : 'bg-grey-lightest' ]"
                    class="flex row-wrap justify-center items-center w-32 max-w-sm h-32 p-4 border text-xl"
                    style="flex-basis:20%;"
                    @click="mark(word)"
            >
                {{ word }}
            </div>
        </div>

        <div class="text-center mx-auto"><em>Generated from <strong>{{ totalWords }}</strong> possible options</em></div>
    </div>




</template>

<script>
    export default {
        data() {
            return {
                words: [
                    "[colour]-face",
                    "Carbon Tax",
                    "(There is no) climate emergency",
                    "\"settle for less\"",
                    "\"Canadians are struggling\"",
                    "pharmacare",
                    "Trump",
                    "\"Let me be clear\"",
                    "Pipelines",
                    "Balancing the budget",
                    "[leader name] won't come clean / tell you the truth",
                    "Bill 21",
                    "SNC-Lavalin",
                    "Insurance Broker",
                    "Corruption",
                    "\"Everyday Canadians\"",
                    "Proportional Representation / Electoral Reform",
                    "Sorry",
                    "May is questioned about abortion",
                    "Scheer doesn't apologize for comments",
                    "Stephen Harper",
                    "1%",
                    "drinking water advisory",
                    "someone calls someone else racist",
                    "\"not as advertised\"",
                    "American Citizen",
                    "Middle Class",
                    "Trudeau has 5 \"uhs\" in one sentence",
                    "May says \"years too late\"",
                    "Everyone ignores Bernier",
                    "Trudeau defends pipeline for climate change",
                    "two planes",
                    "home ownership",
                    "9 out of 10 families",
                    "affordable child care",
                    "multiculturalism",

                ],
                totalWords: 0,
                markedWords: [ "My Friends \n(free space)"],
            }
        },
        mounted() {
            this.totalWords = this.words.length + 1;
            this.words = this.words
                .map(a => [Math.random(), a])
                .sort((a, b) => a[0] - b[0])
                .map(a => a[1])
                .slice(0, 24);
            this.words.splice(12, 0, "My Friends \n(free space)");
        },
        methods: {
            mark(word) {
                if (this.markedWords.includes(word)) {
                    this.markedWords = this.markedWords.filter(marked => marked !== word);
                } else {
                    this.markedWords = Array.from(new Set([...this.markedWords, word]));
                }
            }
        }
    }
</script>
