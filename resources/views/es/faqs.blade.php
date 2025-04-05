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

<div class="section-seperator">
    <div class="content-lg container space20px">
        
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        <i class="glyphicon glyphicon-plus"></i><h4 class="panel-title inline ml-3">How can I trust that your translations will be accurate?</h4>
                    </a>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                  <div class="panel-body">
                   <p> When you work with Leebon, you’re in safe hands. We’re proud to have collaborated with many major international corporations and institutions of all sizes. Quality and accuracy are of the utmost importance to us and we always assign each project to the translation team with the most suitable expertise in your related field.  </p>
                  </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                        <i class="glyphicon glyphicon-plus"></i><h4 class="panel-title inline ml-3">What languages do you translate?</h4>
                    </a>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p> From Afrikaans to Zulu, we offer translations to and from any language pair in the world. </p>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                        <i class="glyphicon glyphicon-plus"></i><h4 class="panel-title inline ml-3"> Do I need to submit original documents to you?</h4>
                    </a>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>No. An original copy of your document is not necessary. A scanned copy via email, fax, or photograph is sufficient. </p>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                        <i class="glyphicon glyphicon-plus"></i><h4 class="panel-title inline ml-3"> What are your payment terms and methods?</h4>
                    </a>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p> We accept credit cards, debit cards, PayPal, checks and bank transfers. Payment is requested in advance.</p>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                        <i class="glyphicon glyphicon-plus"></i><h4 class="panel-title inline ml-3">What currencies do you accept?</h4>
                    </a>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p> We accept all currencies.</p>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                        <i class="glyphicon glyphicon-plus"></i><h4 class="panel-title inline ml-3">Does your translation service provide a sworn affidavit?</h4>
                    </a>
                </div>
                <div id="collapse6" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p> We don’t believe in fake document or fake stamps. We commit and provide genuine work</p>
                        <strong>Question:</strong><br>
                        <p>I am currently applying for Canadian permanent residency and, as part of this process I need to translate my Malaysian birth certificate from Malay into English. I also require a “sworn affidavit from the translator, that the contents of the translation are a true translation and representation of the contents of the original document”. Does your translation service provide this sworn affidavit, and also a certified true copy or notarization of the translation set? I was also wondering how much would all this cost, and how long would it take? Could I just send you a scanned copy of my birth certificate?</p>
                        <p><strong>Answer:</strong> <br>
                            We do provide translation services from Malay into English. Please send your documents by email or upload on website and we will provide you with an estimate. Please note that we only attach a “translator’s declaration” to our translations, which is sufficient for your purposes as we are a very well-known translation agency in British Columbia. We do not provide “certified true copies”. Only public notaries and lawyers offer this type of service in BC.
                        </p>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                        <i class="glyphicon glyphicon-plus"></i><h4 class="panel-title inline ml-3">Is it necessary to proofread a translation?</h4>
                    </a>
                </div>
                <div id="collapse7" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p> Translations should always be proofread before broadcasting. It is an essential part of the publishing process, in the same way that editing English text is an essential part of copywriting.</p>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                        <i class="glyphicon glyphicon-plus"></i><h4 class="panel-title inline ml-3">What are the steps to improve the review process?</h4>
                    </a>
                </div>
                <div id="collapse8" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p> The purpose of the collaborative process of translation review by peers who are experts in the subject area but not in translation per se is to achieve the best quality of promotional material by checking it for accuracy of facts and figures and the terminology specific to the given subject. Despite the due research of the subject area the translators always do, peer reviewers may be more acquainted with the terminology used in the given subject (immigration, settlement, child care, etc.).</p>
                        <p>  Given the fact that the translation is performed by professional translators who are trained linguists and/or language experts, it is little likely that a peer reviewer will need to check the style, grammar or punctuation. Translators are also native speakers of the target language, often immersed in their community and aware of the nuances that need to be conveyed to the readers.</p>
                        <p>  A clear distinction must be made between evaluation and review. The reviewer’s job is not to improve what may already be a good translation. Reviewers should therefore avoid the temptation to “impose” their personal preferences on the translation. In assessing errors, they must simply ask: “Is the translation adequate?” If they feel that it is not, then they must be able to characterize or explain the error. It is not good enough to justify the assessment of an error by saying, “Well, it doesn’t sound right.” If you cannot give the problem a name, then perhaps it is not an error after all.</p>
                        <p>Please keep in mind that the literacy level of the source text will be reflected in the translation. Translators cannot and will not take the liberty to simplify the source text to adjust it to the literacy level of the readers. A plain language text will be translated into plain target language, just as a technical language text will retain its technical level in the translation. The writer of the original text will have to keep this in mind along with other issues that may affect potential readers (e.g. cultural sensitivity).</p>
                        <p> When reviewing a PDF file, text boxes (yellow sticky notes) should be used to write comments. One a printed copy, a black pen and legible writing should be used because the corrected pages will probably be scanned and emailed.</p>
                    </div>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
                        <i class="glyphicon glyphicon-plus"></i><h4 class="panel-title inline ml-3">Do graphic standards and elements apply to all languages the same way as they are conceived for documents in English?</h4>
                    </a>
                </div>
                <div id="collapse9" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p> When processing translated materials, and producing the final output, instead of aiming for a uniform look among all languages in a project, we concentrate on the languages per se. Our concern is to abide by the cultural sensitivity of each language community. Our translators guide us in doing so and keep us on track. For example, since Persian, Arabic, etc., are read from right to left, all text, letterhead and logos will typically be inverted.
                            What is common practice in one language or community may not be so in another. And what is meant for a target audience located in the province of British Columbia will not necessarily be suitable for an audience somewhere else.
                        </p>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
                        <i class="glyphicon glyphicon-plus"></i><h4 class="panel-title inline ml-3">Is it possible to translate very old handwritten documents?</h4>
                    </a>
                </div>
                <div id="collapse10" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p> In order to provide accurate translations, translators have to be able to read the source texts. In many cases it is not possible, but educated guesses can be made at times, and only when the translator has a comfortable level of certainty that the translation is correct. A seasoned translator knows from experience how entries are made in old documents; however, when the entries are not legible, or are abbreviated, it is truly impossible to render a faithful and accurate translation, and since legibility is often a problem, translators prefer or are legally obliged to opt for “illegible” rather than guess.</p>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">
                        <i class="glyphicon glyphicon-plus"></i><h4 class="panel-title inline ml-3">What is the difference between Chinese Simplified and Chinese Traditional?</h4>
                    </a>
                </div>
                <div id="collapse11" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p> Despite their staggering complexity, the Chinese characters do have the advantage of making written communication possible between people speaking mutually unintelligible dialects and languages. A given word may be quite different in Mandarin and Cantonese, but it would be written identically in the two dialects. Since the Chinese characters are also used in Japanese, each language, when written, is partially intelligible to a speaker of the other, despite the fact that the two spoken languages are totally dissimilar.
                            Numerous attempts have been made over the years to simplify the Chinese system of writing. In 1955 the Chinese People’s Republic initiated a plan to simplify more than 1,700 characters, this number to be increased gradually so that over half of the most commonly used symbols would eventually be simplified.
                        </p>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">
                        <i class="glyphicon glyphicon-plus"></i><h4 class="panel-title inline ml-3">I need a translation into Chinese, what do I need to know?</h4>
                    </a>
                </div>
                <div id="collapse12" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p> In order to know what Chinese script to translate to, one needs to know who the target audience is. Audiences from Hong Kong and Taiwan read the Chinese Traditional script. Audiences from Mainland China and Singapore read the Chinese Simplified.
                            It is not possible to know what script to use solely by indicating what the spoken language of the target audience is. Cantonese is spoken in Hong Kong and in Southern China. Mandarin is spoken in Taiwan, Mainland China and Singapore.
                        </p>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">
                        <i class="glyphicon glyphicon-plus"></i><h4 class="panel-title inline ml-3">Why are there differences in Vietnamese language used in the north and the south of the country?</h4>
                    </a>
                </div>
                <div id="collapse12" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p> It has to do with the history of Vietnam. Before 1975, Vietnam was divided into two parts. The north was under the communist regime and the south was a free republic. The language also changed substantially between the two regions. The pure (or “un-politicized”) language was used in South Vietnam but in the north, the language was purposely reshaped and remolded for propaganda and mass-control purposes.</p>
                    </div>
                </div>
            </div>
          
        </div> <!--  // ##accordion  //  -->

    </div>
</div>

<!--========== END PAGE LAYOUT ==========-->
@endsection

@section('scripts')
<script src="{{ asset("/assets/js/scripts.js") }}"></script>
@endsection