@extends('layouts.app')

@section('content')
<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="{{asset("/assets/img/1920x1080/01.jpg")}}">
    <div class="parallax-content container innerpage">
        <h1 class="carousel-title">FAQS </h1>
        <p class="white-text">&nbsp;</p>
    </div>
</div>
<!--========== PARALLAX ==========-->

<!--========== PAGE LAYOUT ==========-->

<div class="section-seperator my-5">
    <div class="content-lg container space20px">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        How can I trust that your translations will be accurate?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> When you work with Translationwindows, you’re in safe hands. We’re proud to have collaborated with many major international corporations and institutions of all sizes. Quality and accuracy are of the utmost importance to us and we always assign each project to the translation team with the most suitable expertise in your related field.  </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What languages do you translate?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> From Afrikaans to Zulu, we offer translations to and from any language pair in the world. </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Do I need to submit original documents to you?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>No. An original copy of your document is not necessary. A scanned copy via email, fax, or photograph is sufficient. </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        What are your payment terms and methods?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> We accept credit cards, debit cards, PayPal, checks and bank transfers. Payment is requested in advance.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        What currencies do you accept?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> We accept all currencies.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Does your translation service provide a sworn affidavit?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> We don’t believe in fake document or fake stamps. We commit and provide genuine work</p>
                            <strong>Question:</strong><br>
                        <p>I am currently applying for Canadian permanent residency and, as part of this process I need to translate my Malaysian birth certificate from Malay into English. I also require a “sworn affidavit from the translator, that the contents of the translation are a true translation and representation of the contents of the original document”. Does your translation service provide this sworn affidavit, and also a certified true copy or notarization of the translation set? I was also wondering how much would all this cost, and how long would it take? Could I just send you a scanned copy of my birth certificate?</p>
                        <p><strong>Answer:</strong> <br>
                            We do provide translation services from Malay into English. Please send your documents by email or upload on website and we will provide you with an estimate. Please note that we only attach a “translator’s declaration” to our translations, which is sufficient for your purposes as we are a very well-known translation agency in British Columbia. We do not provide “certified true copies”. Only public notaries and lawyers offer this type of service in BC.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Does your translation service provide a sworn affidavit?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> We don’t believe in fake document or fake stamps. We commit and provide genuine work</p>
                            <strong>Question:</strong><br>
                        <p>I am currently applying for Canadian permanent residency and, as part of this process I need to translate my Malaysian birth certificate from Malay into English. I also require a “sworn affidavit from the translator, that the contents of the translation are a true translation and representation of the contents of the original document”. Does your translation service provide this sworn affidavit, and also a certified true copy or notarization of the translation set? I was also wondering how much would all this cost, and how long would it take? Could I just send you a scanned copy of my birth certificate?</p>
                        <p><strong>Answer:</strong> <br>
                            We do provide translation services from Malay into English. Please send your documents by email or upload on website and we will provide you with an estimate. Please note that we only attach a “translator’s declaration” to our translations, which is sufficient for your purposes as we are a very well-known translation agency in British Columbia. We do not provide “certified true copies”. Only public notaries and lawyers offer this type of service in BC.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        What are the steps to improve the review process?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> The purpose of the collaborative process of translation review by peers who are experts in the subject area but not in translation per se is to achieve the best quality of promotional material by checking it for accuracy of facts and figures and the terminology specific to the given subject. Despite the due research of the subject area the translators always do, peer reviewers may be more acquainted with the terminology used in the given subject (immigration, settlement, child care, etc.).</p>
                        <p>  Given the fact that the translation is performed by professional translators who are trained linguists and/or language experts, it is little likely that a peer reviewer will need to check the style, grammar or punctuation. Translators are also native speakers of the target language, often immersed in their community and aware of the nuances that need to be conveyed to the readers.</p>
                        <p>  A clear distinction must be made between evaluation and review. The reviewer’s job is not to improve what may already be a good translation. Reviewers should therefore avoid the temptation to “impose” their personal preferences on the translation. In assessing errors, they must simply ask: “Is the translation adequate?” If they feel that it is not, then they must be able to characterize or explain the error. It is not good enough to justify the assessment of an error by saying, “Well, it doesn’t sound right.” If you cannot give the problem a name, then perhaps it is not an error after all.</p>
                        <p>Please keep in mind that the literacy level of the source text will be reflected in the translation. Translators cannot and will not take the liberty to simplify the source text to adjust it to the literacy level of the readers. A plain language text will be translated into plain target language, just as a technical language text will retain its technical level in the translation. The writer of the original text will have to keep this in mind along with other issues that may affect potential readers (e.g. cultural sensitivity).</p>
                        <p> When reviewing a PDF file, text boxes (yellow sticky notes) should be used to write comments. One a printed copy, a black pen and legible writing should be used because the corrected pages will probably be scanned and emailed.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        Do graphic standards and elements apply to all languages the same way as they are conceived for documents in English?
                    </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> When processing translated materials, and producing the final output, instead of aiming for a uniform look among all languages in a project, we concentrate on the languages per se. Our concern is to abide by the cultural sensitivity of each language community. Our translators guide us in doing so and keep us on track. For example, since Persian, Arabic, etc., are read from right to left, all text, letterhead and logos will typically be inverted.
                            What is common practice in one language or community may not be so in another. And what is meant for a target audience located in the province of British Columbia will not necessarily be suitable for an audience somewhere else.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                        Is it possible to translate very old handwritten documents?
                    </button>
                </h2>
                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> In order to provide accurate translations, translators have to be able to read the source texts. In many cases it is not possible, but educated guesses can be made at times, and only when the translator has a comfortable level of certainty that the translation is correct. A seasoned translator knows from experience how entries are made in old documents; however, when the entries are not legible, or are abbreviated, it is truly impossible to render a faithful and accurate translation, and since legibility is often a problem, translators prefer or are legally obliged to opt for “illegible” rather than guess.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEleven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                        What is the difference between Chinese Simplified and Chinese Traditional?
                    </button>
                </h2>
                <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> Despite their staggering complexity, the Chinese characters do have the advantage of making written communication possible between people speaking mutually unintelligible dialects and languages. A given word may be quite different in Mandarin and Cantonese, but it would be written identically in the two dialects. Since the Chinese characters are also used in Japanese, each language, when written, is partially intelligible to a speaker of the other, despite the fact that the two spoken languages are totally dissimilar.
                                Numerous attempts have been made over the years to simplify the Chinese system of writing. In 1955 the Chinese People’s Republic initiated a plan to simplify more than 1,700 characters, this number to be increased gradually so that over half of the most commonly used symbols would eventually be simplified.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwelve">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                        I need a translation into Chinese, what do I need to know?
                    </button>
                </h2>
                <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> In order to know what Chinese script to translate to, one needs to know who the target audience is. Audiences from Hong Kong and Taiwan read the Chinese Traditional script. Audiences from Mainland China and Singapore read the Chinese Simplified.
                            It is not possible to know what script to use solely by indicating what the spoken language of the target audience is. Cantonese is spoken in Hong Kong and in Southern China. Mandarin is spoken in Taiwan, Mainland China and Singapore.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThirteen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                        Why are there differences in Vietnamese language used in the north and the south of the country?
                    </button>
                </h2>
                <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> It has to do with the history of Vietnam. Before 1975, Vietnam was divided into two parts. The north was under the communist regime and the south was a free republic. The language also changed substantially between the two regions. The pure (or “un-politicized”) language was used in South Vietnam but in the north, the language was purposely reshaped and remolded for propaganda and mass-control purposes.</p>
                    </div>
                </div>
            </div>
        </div> <!-- ##accordionExample ends -->
    </div> <!-- ..content-lg container space20px -->
</div>

<!--========== END PAGE LAYOUT ==========-->
@endsection
