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
                    "Notley Trudeau Alliance",
                    "Lake of Fire",
                    "Pipelines!",
                    "GSAs",
                    "\"Smear Campaign\"",
                    "NDP offers to spend $1B+ on something",
                    "UCP wants to privatize something",
                    "\"math is hard\"",
                    "Alberta Advantage",
                    "Kamikaze campaign",
                    "\"previous government\"",
                    "More than one candidate compares themselves to Lougheed",
                    "Donald Trump comparison",
                    "$100B Debt",
                    "Ralph Klein / Peter Lougheed",
                    "NDP/UCP ignore AB Party/Liberals",
                    "\"Twitter outrage machine\"",
                    "\"only [my party] will do something\"",
                    "The only poll that matters",
                    "social license",
                    "someone proposes a referendum",
                    "someone criticizes federal government",
                    "someone accuses someone of doing something for \"their friends\"",
                    "finding efficiencies",
                    "job creators",
                    "equalization",
                    "Bill 6",
                    "Racism, homophobia, transphobia, islamophobia (all in one breath)",
                    "Where's fildebrandt?",
                    "Someone asks if Mandel understands how taxes work",
                    "ad hominem attacks (either real or perceived)",
                    "\"Job-killing [x]\"",
                    "bozo eruption",
                    "accidental government",
                    "discovery math / tested teaching methods",
                    "ideological curriculum review",
                    "San Francisco",
                    "biggest lie in Alberta's history",
                    "Albertan values",
                    "economic engine of Canada",
                    "Grasroots Guarantee™",
                    "candidate calls viewers \"my friends\"",
                    "Kenney's donor list",
                    "Sky Palace"
                ],
                totalWords: 0,
                markedWords: [ "Carbon Tax \n(free space)"],
            }
        },
        mounted() {
            this.totalWords = this.words.length + 1;
            this.words = this.words
                .map(a => [Math.random(), a])
                .sort((a, b) => a[0] - b[0])
                .map(a => a[1])
                .slice(0, 24);
            this.words.splice(12, 0, "Carbon Tax \n(free space)");
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
