<?php

namespace Database\Seeders;

use App\Models\Journal;
use Illuminate\Database\Seeder;

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $journal_one = Journal::create([
            'name' => 'INTERNATIONAL JOURNAL OF EMPIRICAL RESEARCH METHODS',
            'acronym' => 'ijerm',
            'issn_no' => '2995-6110', 'image' => 'journal-images/1.png',
            'description' => 'The International Journal of Empirical Research Methods is dedicated to promoting and advancing empirical research methodologies across various disciplines. This journal aims to provide a platform for researchers, scholars, educators, and practitioners to share insights, methodologies, and findings that contribute to the improvement of empirical research practices and the enhancement of evidence-based decision-making. ',
            'is_active' => true,
        ]);

        $journal_one->journal_matrix()->create(['acceptance_rate' => '49', 'submission_to_final_decision' => '136', 'acceptance_to_publication' => '27', 'dio_prefix' => '10.59762/ijerm', 'publication_type' => 'Peer Reviewed', 'publishing_model' => 'Open Access', 'journal_category' => 'Multidisciplinary', 'acp' => '100',]);

        $this->create_overview($journal_one);

        $journal_two = Journal::create([
            'name' => 'CULTURAL LANDSCAPE INSIGHTS',
            'acronym' => 'cli',
            'issn_no' => '2995-6129', 'image' => 'journal-images/2.png',
            'description' => 'Cultural Landscape Insights is a multidisciplinary journal that explores and understands the complex interplay between culture, organization, society, and physical environments. This journal provides a platform for researchers, scholars, and practitioners to delve into the rich tapestry of cultural expressions, traditions, and their dynamic relationship with the landscapes they inhabit.',
            'is_active' => true,
        ]);

        $journal_two->journal_matrix()->create(['acceptance_rate' => '35', 'submission_to_final_decision' => '116', 'acceptance_to_publication' => '27', 'dio_prefix' => '10.59762/cli', 'publication_type' => 'Peer Reviewed', 'publishing_model' => 'Open Access', 'journal_category' => 'Cultural Studies / Anthropology / Business Anthropology', 'acp' => '100',]);

        $this->create_overview($journal_two);


        $journal_three = Journal::create([
            'name' => 'SUSTAINABLE ENERGY AND ENVIRONMENT REVIEW',
            'acronym' => 'seer',
            'issn_no' => '2996-1181', 'image' => 'journal-images/3.png',
            'description' => 'Sustainable Energy and Environment Review is dedicated to advancing the knowledge and understanding of sustainable practices, innovations, and policies in the fields of energy and the environment. Our journal aims to provide a platform for researchers, policymakers, practitioners, and stakeholders to share insights, research findings, and strategies that contribute to the transition towards a more sustainable and environmentally responsible future.',
            'is_active' => true,
        ]);


        $journal_three->journal_matrix()->create(['acceptance_rate' => '39', 'submission_to_final_decision' => '143', 'acceptance_to_publication' => '41', 'dio_prefix' => '10.59762/seer', 'publication_type' => 'Peer Reviewed', 'publishing_model' => 'Open Access', 'journal_category' => 'Environmental Sciences / Energy', 'acp' => '100',]);
        $this->create_overview($journal_three);
        $journal_four = Journal::create([
            'name' => 'CURRENT INTEGRATIVE ENGINEERING',
            'acronym' => 'cie',
            'issn_no' => '2995-6307', 'image' => 'journal-images/4.png',
            'description' => 'Current Integrative Engineering is dedicated to providing a platform for the exchange of cutting-edge research and innovative solutions across various engineering disciplines. Our mission is to foster collaboration and knowledge sharing among engineers, researchers, and industry professionals. We aim to bridge gaps in understanding, encourage interdisciplinary collaborations, and contribute to the collective advancement of engineering knowledge and its practical applications. Through our diverse scope, we strive to drive innovation, sustainability, and progress in the field of engineering.',
            'is_active' => true,
        ]);


        $journal_four->journal_matrix()->create(['acceptance_rate' => '43', 'submission_to_final_decision' => '129', 'acceptance_to_publication' => '27', 'dio_prefix' => '10.59762/cie', 'publication_type' => 'Peer Reviewed', 'publishing_model' => 'Open Access', 'journal_category' => 'Engineering', 'acp' => '100',]);

        $this->create_overview($journal_four);


        $journal_five = Journal::create([
            'name' => 'JOURNAL OF BUSINESS LEADERSHIP AND MANAGEMENT',
            'acronym' => 'jblm',
            'issn_no' => '2995-620X', 'image' => 'journal-images/5.png',
            'description' => 'The Journal of Business Leadership and Management is committed to advancing the understanding of effective leadership and management practices in the dynamic landscape of business. Our journal aims to provide a platform for academics, practitioners, researchers, and thought leaders to share insights, research findings, and strategies that contribute to informed decision-making and organizational success.',
            'is_active' => true,
        ]);

        $journal_five->journal_matrix()->create(['acceptance_rate' => '35', 'submission_to_final_decision' => '136', 'acceptance_to_publication' => '27', 'dio_prefix' => '10.59762/jblm', 'publication_type' => 'Peer Reviewed', 'publishing_model' => 'Open Access', 'journal_category' => 'Business / Management / Leadership', 'acp' => '100',]);

        $this->create_overview($journal_five);


        $journal_six = Journal::create([
            'name' => 'RECENT EDUCATIONAL RESEARCH',
            'acronym' => 'rer',
            'issn_no' => '2996-2366', 'image' => 'journal-images/6.png',
            'description' => 'The aim of the journal "Recent Educational Research" is to provide a platform for scholars, researchers, educators, and practitioners to disseminate high-quality, original research findings and innovative educational practices. The journal strives to advance the understanding of contemporary educational issues and contribute to the enhancement of teaching, learning, and educational policy development.',
            'is_active' => true,
        ]);


        $journal_six->journal_matrix()->create(['acceptance_rate' => '37', 'submission_to_final_decision' => '120', 'acceptance_to_publication' => '29', 'dio_prefix' => '10.59762/rer', 'publication_type' => 'Peer Reviewed', 'publishing_model' => 'Open Access', 'journal_category' => 'Education / Pedagogy', 'acp' => '100',]);

        $this->create_overview($journal_six);

        $journal_seven = Journal::create([
            'name' => 'PHARMACEUTICAL BREAKTHROUGHS',
            'acronym' => 'pb',
            'issn_no' => '2996-1157', 'image' => 'journal-images/7.png',
            'description' => 'Pharmaceutical Breakthroughs is dedicated to fostering a deep understanding of novel developments, advancements, and breakthroughs in the field of pharmaceutical sciences. Our journal aims to be a platform for researchers, scientists, clinicians, and industry professionals to share their insights, discoveries, and perspectives in the realm of pharmaceutical innovation.',
            'is_active' => true,
        ]);

        $journal_seven->journal_matrix()->create(['acceptance_rate' => '38', 'submission_to_final_decision' => '124', 'acceptance_to_publication' => '30', 'dio_prefix' => '10.59762/pb', 'publication_type' => 'Peer Reviewed', 'publishing_model' => 'Open Access', 'journal_category' => 'Pharmaceutical Sciences / Medicinal Chemistry', 'acp' => '100',]);

        $this->create_overview($journal_seven);


        $journal_eight = Journal::create([
            'name' => 'MEDICAL SPECTRUM REVIEW',
            'acronym' => 'msr',
            'issn_no' => '', 'image' => 'journal-images/8.png',
            'description' => 'Medical Spectrum Review is dedicated to advancing medical knowledge and practice. Our journal aims to facilitate collaboration among diverse medical professionals, including clinicians, researchers, and educators. We strive to promote the translation of cutting-edge research into clinical applications for enhanced patient care. Additionally, we address global health challenges through impactful research and public health initiatives. Above all, we encourage ethical and evidence-based medical practice, prioritizing patient well-being. Medical Spectrum Review strives to contribute to the continuous improvement of healthcare worldwide.',
            'is_active' => true,
        ]);

        $journal_eight->journal_matrix()->create(['acceptance_rate' => '27', 'submission_to_final_decision' => '145', 'acceptance_to_publication' => '37', 'dio_prefix' => '10.59762/msr', 'publication_type' => 'Peer Reviewed', 'publishing_model' => 'Open Access', 'journal_category' => 'Medical Sciences', 'acp' => '100',]);

        $this->create_overview($journal_eight);


        $journal_nine = Journal::create([
            'name' => 'STRATEGIC FINANCIAL REVIEW',
            'acronym' => 'sfr',
            'issn_no' => '', 'image' => 'journal-images/9.png',
            'description' => 'Strategic Financial Review is dedicated to advancing the understanding of strategic financial management and its role in driving organizational success. Our journal aims to provide a platform for researchers, practitioners, academics, and policymakers to share insights, research findings, and strategies that contribute to informed financial decision-making and sustainable growth.',
            'is_active' => true,
        ]);

        $journal_nine->journal_matrix()->create(['acceptance_rate' => '46', 'submission_to_final_decision' => '136', 'acceptance_to_publication' => '27', 'dio_prefix' => '10.59762/msr', 'publication_type' => 'Peer Reviewed', 'publishing_model' => 'Open Access', 'journal_category' => 'Finance', 'acp' => '100',]);

        $this->create_overview($journal_nine);


        $journal_ten = Journal::create([
            'name' => 'ADVANCED CHEMISTRY INSIGHTS',
            'acronym' => 'aci',
            'issn_no' => '', 'image' => 'journal-images/10.jpg',
            'description' => 'Advanced Chemistry Insights is a leading platform for the dissemination of cutting-edge research and insights in the field of chemistry. The journal is committed to advancing scientific knowledge and catalyzing innovation across various domains of chemistry.',
            'is_active' => true,
        ]);

        $journal_ten->journal_matrix()->create(['acceptance_rate' => '37', 'submission_to_final_decision' => '136', 'acceptance_to_publication' => '27', 'dio_prefix' => '10.59762/aci', 'publication_type' => 'Peer Reviewed', 'publishing_model' => 'Open Access', 'journal_category' => 'Chemistry / Chemical Sciences', 'acp' => '100',]);

        $this->create_overview($journal_ten);
    }

    private function create_overview($j)
    {
        $j->journal_overview()->create([
            'manuscript_prepation_guideline' => ' <div class="article-titles">
            <p>
                Feel free to download the template for your article, designed to meet our
                formatting standards. Although it\'s optional, should you choose not to use
                it, our designing team at Guinness Press will still ensure your manuscript
                aligns with our requirements upon acceptance.
            </p>
            <a class="article-tabbtn"
                href="{{ url(\'/journals/template-file\') }}/{{ \'abs\' }}.pdf">
                <span>Download Template File</span>
            </a>
            <p>Before submitting your manuscript, please ensure the following:</p>
            <ul class="tab-list">
                <li><span>Proper attribution is given to the author and permission is
                        obtained from the original copyright holder if copyrighted material
                        is being used.</span></li>
                <li><span>Keywords are included in the manuscript.</span></li>
                <li><span>All ethical requirements are met in the manuscript.</span></li>
                <li><span>References are complete and cited in sequential order in the text
                        section of the manuscript.</span></li>
                <li><span>Supplemental files, if applicable, are provided.</span></li>
                <li><span>Conflict of interest is declared. Even if there is no conflict of
                        interest, it must be reported.</span></li>
                <li><span>Figures and Tables, along with their captions if provided, are
                        cited in the text section of the manuscript.</span></li>
                <li><span>The manuscript is free from grammatical and spelling
                        errors.</span></li>
            </ul>
            <h3>1. Guidelines for Reporting</h3>
            <p>Authors are encouraged to adhere to the following guidelines when reporting
                their research:</p>
            <ul class="tab-list">
                <li><span><a
                            href="http://www.care-statement.org/resources/checklist">CARE:</a>
                        Recommended to use for case reports. </span></li>
                <li><span><a href="https://www.nc3rs.org.uk/arrive-guidelines">ARRIVE:</a>
                        Recommended to improve the reporting of research using animal
                        experiments. </span></li>
                <li><span><a
                            href="https://academic.oup.com/intqhc/article/19/6/349/1791966">COREQ:</a>
                        Recommended for qualitative research. </span></li>
                <li><span><a
                            href="https://legacyfileshare.elsevier.com/promis_misc/ISSM_MOOSE_Checklist.pdf">MOOSE:</a>
                        Recommended for meta-analyses of observational studies in
                        Epidemiology </span></li>
                <li><span><a href="http://www.stard-statement.org/">STARD</a> and <a
                            href="http://www.tripod-statement.org/">TRIPOD:</a> Recommended
                        for diagnostic accuracy studies. </span></li>
                <li><span><a href="https://www.cdc.gov/trendstatement/">TREND:</a>
                        Recommended for non-randomized trials. </span></li>
                <li><span><a
                            href="https://www.strobe-statement.org/index.php?id=available-checklists">STROBE:</a>
                        Recommended for Observational studies. </span></li>
                <li><span><a href="http://www.prisma-statement.org/">PRISMA:</a>
                        Recommended to follow for systematic review and meta-analyses.
                    </span></li>
                <li><span><a
                            href="http://www.equator-network.org/reporting-guidelines/strobe-strega/">STREGA:</a>
                        Recommended for studies of genetic association. </span></li>
                <li><span><a
                            href="https://www.equator-network.org/wp-content/uploads/2013/04/CHEERS-2022-checklist-1.pdf">CHEERS:</a>
                        Recommended for economic evaluations. </span></li>
                <li><span><a href="http://www.consort-statement.org/consort-2010">Consolidated
                            Standards of Reporting Trials (CONSORT):</a> Recommended for
                        randomized controlled trials. </span></li>
            </ul>
            <h3>2. Submission Process</h3>
            <p>
                To submit your manuscript to Guinness Press, utilize our dedicated online
                submission system available at
                https://guinnesspress.org/submit-your-article. The corresponding author is
                tasked with the submission and will work closely with the Editorial Office
                throughout the process. Prior to submission, the corresponding author must
                confirm that all authors listed adhere to the authorship criteria outlined
                by the International Committee of Medical Journal Editors (ICMJE) and COPE.
            </p>
            <h3>3. Cover Letter</h3>
            <p>
                During manuscript submission, the corresponding author is required to
                include a cover letter, outlining the manuscript\'s significance. This letter
                should affirm, on behalf of all authors, that the submission is original and
                not under consideration or published elsewhere. Additionally, it should
                confirm agreement among all authors regarding authorship and state the
                absence of disputes. Please disclose any potential conflicts of interest or
                concerns regarding journal policies in the cover letter as well.
            </p>
            <h3>4. Title:</h3>
            <p>
                Authors should aim for a concise title for their manuscript, ideally
                spanning 10-15 words and directly reflecting the research topic. It\'s
                advisable to refrain from using abbreviations or shortened forms. Kindly
                adhere to these guidelines when crafting your submission\'s title.
            </p>
            <h3>5. Authors\' Name and Affiliation:</h3>
            <p>
                The title page of the manuscript should list the full names of all authors,
                accompanied by their current affiliations, digital identifiers, and email
                addresses. Ensuring the accuracy and completeness of this information is
                essential for efficient communication and appropriate attribution.
            </p>
            <h3>6. Article Structure: Subdivision - Numbered Sections</h3>
            <p>
                Please organize your article into distinct, numbered sections. Subsections
                should be labeled as 1.1 (and then 1.1.1, 1.1.2, and so on), 1.2, and so
                forth. Note that section numbering excludes the abstract. Utilize this
                numbering system for internal cross-references, avoiding vague references to
                \'the text\'. If necessary, provide concise headings for each subsection,
                ensuring each heading begins on a separate line.
            </p>
            <h3>7. Highlights:</h3>
            <p>
                While optional, we strongly encourage authors to include this section, as it
                could enhance the visibility of your articles. We invite you to summarize
                the key points of your article in 3 to 5 bullet points, enhancing its
                discoverability on search engines. These highlights should be submitted as a
                separate, editable file using \'Highlights\' in the filename or provided as a
                distinct section within the manuscript. Utilizing 3 to 5 bullet points, each
                within 85 characters (including spaces), can significantly enhance your
                article\'s online visibility.
            </p>
            <h3>8. Abstract:</h3>
            <p>
                The abstract of a research article should be concise, adhering to a strict
                350-word limit. It should include a brief introduction, presentation of
                results, and a succinct discussion. Avoid citing references within the
                abstract and refrain from using abbreviations.
            </p>
            <h3>9. Keywords:</h3>
            <p>
                Incorporate a minimum of 6-8 keywords in the manuscript that are directly
                relevant to the topic. Choose specific keywords and steer clear of generic
                terms such as disease, climate, environment, etc.
            </p>
            <h3>10. Introduction:</h3>
            <p>
                The introduction serves as the initial section of the manuscript, providing
                an explanation of the significance and background of the topic under
                discussion.
            </p>
            <h3>11. Materials and Methods:</h3>
            <p>
                This section should furnish details pertaining to the "Materials and
                Methods" employed in the research, including the original data source,
                materials utilized, study aim, design, and setting. Provide a comprehensive
                description of processes, interventions, and comparisons within the
                materials and methods section of the manuscript.
            </p>
            <h3>12. Results:</h3>
            <p>
                This section should encompass the main and significant findings of the
                study. Results of statistical analysis can be presented within the text or
                referenced in tables or figures.
            </p>
            <h3>13. Discussion:</h3>
            <p>
                Authors are encouraged to interpret the results in the context of previous
                studies and working hypotheses. Discuss the findings and their implications
                broadly, highlighting the limitations of the work. Future research
                directions may also be suggested. This section, "Discussion," may be merged
                with the Results section.
            </p>
            <h3>14. Conclusion:</h3>
            <p>
                Provide a concise summary of the entire article under the section
                "Conclusion."
            </p>
            <h3>15. List of Abbreviations:</h3>
            <p>
                If the manuscript contains abbreviations, their full forms should be
                provided initially. Authors are advised to include a comprehensive list of
                these abbreviations along with their full names under the section "List of
                Abbreviations," which should be placed at the end of the article.
            </p>
            <h3>16. Declarations</h3>
            <p>Every research article should encompass the following sections:</p>
            <ul class="tab-list">
                <li>Approval of ethics and consent to participate</li>
                <li>Permission for publication</li>
                <li>Availability of data and materials</li>
                <li>Disclosure of conflicts of interest</li>
                <li>Funding sources</li>
                <li>Contributions of authors</li>
                <li>Acknowledgments</li>
            </ul>
            <h3>17. References</h3>
            <p>Guinness Press Journals adhere to either APA reference style. Here are key
                points to consider when citing articles:</p>
            <ul class="tab-list">
                <li>Maintain Consistency in Citations: All references cited within figures,
                    tables, or text should also be listed in the reference section of the
                    manuscript.</li>
                <li>Author Count and "et al." Usage: If there are 6 or fewer authors,
                    include all their names. For references with more than 6 authors, list
                    the names of the first 6 authors followed by "et al." to represent the
                    remaining authors.</li>
                <li>Include DOIs: Ensure to include the DOI (Digital Object Identifier) for
                    all cited articles at the end of your references.</li>
                <li>Published Articles: Include only articles that have been published or
                    accepted for publication. For published articles, provide the page
                    numbers or article numbers.</li>
                <li>Accepted Articles: If an article has been accepted for publication but
                    is pending publication, indicate its status as "In Press" within
                    brackets.</li>
                <li>Avoid Citing Data Under Peer Review: Guinness Press discourages citing
                    data that is still under peer review by any publisher.</li>
            </ul>
            <h3>18. Manuscript File Formats</h3>
            <p>For submitting manuscripts, the preferred file format is Microsoft Word,
                either in DOC or DOCX format. Editable files are essential for the review
                and production process. If you initially submit a non-editable file, you
                will need to resubmit your manuscript in a Word file.</p>
            <p>Consider the following points:</p>
            <ul class="tab-list">
                <li>Utilize double-line spacing.</li>
                <li>Include both line and page numbering in your document.</li>
                <li>Ensure that any special characters used are properly embedded within the
                    text, as they may be lost during the conversion to PDF.</li>
                <li>Avoid using page breaks in your manuscript</li>
            </ul>
            <h3>19. Figures</h3>
            <p>
                In accordance with the regulations detailed in the Image Manipulation
                section of our Ethical Guidelines, authors must obtain permission prior to
                incorporating copyrighted figures or any segment of a figure or table,
                ensuring strict adherence to the requirements of relevant licenses.
            </p>
            <p>
                Figures should be positioned near the corresponding text rather than at the
                beginning or end of the document, and citations of figures within the text
                should follow a sequential order. Figures with multiple parts should be
                consolidated into a single file containing all components (a, b, c, etc.),
                with each figure not exceeding 10 MB in size. When utilizing graphs, labels
                including units should be provided for each axis.
            </p>
            <p>
                If the manuscript is submitted in LaTex format, figures should be submitted
                in PDF. Following acceptance of the paper, separate figures may be necessary
                for production purposes.
            </p>
            <p>
                Authors are reminded to obtain approval from the original copyright holder
                if figures are reproduced from any published content.
            </p>
            <p>
                <u>Image Size and Resolution:</u>
            </p>
            <p>As the final manuscript version will be in PDF format, figures must be
                prepared to align with this format.</p>
            <p>
                <u>Dimension Requirements:</u>
            </p>
            <ul class="tab-list">
                <li>For single-column figures: Width should be 85mm</li>
                <li>For double-column figures: Width should be 180mm</li>
            </ul>
            <p><b>Resolution:</b> Ensure figures have high resolution (typically 300 dots
                per inch or DPI) to maintain quality when printed or viewed on-screen.
                Verify resolution by enlarging the figure to 150%. Blurriness indicates
                insufficient resolution.</p>
            <p><b>Font Size:</b> Ensure text, labels, or legends in figures are legible at
                expected dimensions. A font size of 8-10 points is usually suitable.</p>
            <p>
                <u>Acceptable File Types for Figures:</u>
            </p>
            <ul class="tab-list">
                <li>Microsoft Word (single-page figures)</li>
                <li>PowerPoint (single-page figures)</li>
                <li>EPS</li>
                <li>PDF</li>
                <li>TIFF</li>
                <li>JPEG</li>
                <li>PNG</li>
                <li>BMP</li>
            </ul>
            <p>For Vector drawings, provide EPS or PDF. Chemical structures should be
                prepared in CDX (ChemDraw).</p>
            <p>
                <u>Please Avoid:</u>
            </p>
            <ul class="tab-list">
                <li>Low-quality figures</li>
                <li>Files with low resolution for screen use (e.g., BMP, GIF, WPG, PICT)
                </li>
                <li>Graphics larger than necessary for content</li>
            </ul>
            <p><b>Figure Captions:</b> Captions should consist of a concise text title
                separate from the figure. Provide minimal descriptions with explanations for
                abbreviations and symbols used.</p>
            <h3>20. Tables</h3>
            <ul class="tab-list">
                <li><u>Table Citations:</u> <span>Tables should be cited in sequential order
                        within the text section of the manuscript. It\'s essential to include
                        all citations, and tables must be provided as editable Word files,
                        not images.</span></li>
                <li><u>Table Layout:</u> <span>The table caption should be positioned above
                        the table, with legends provided underneath.</span></li>
                <li><u>Large Files:</u> <span>For large files with multiple parts, they
                        should be listed under Supplementary files due to formatting
                        considerations.</span></li>
                <li><u>Table Numbering:</u> <span>When referring to tables in the text, use
                        the format "Table 1," with the number in bold.</span></li>
                <li><u>Table Usage:</u> <span>Avoid duplicating information, ensuring that
                        results are not repeated elsewhere in the manuscript.</span></li>
                <li><u>Formatting:</u> <span>Refrain from using shading or vertical rules in
                        table cells.</span></li>
            </ul>
            <h3>21. Supplementary Materials </h3>
            <p>
                Guinness Press publishes supplementary material alongside articles to enrich
                content and provide readers with valuable resources. For manuscripts with
                innovative or extensive methodology sections, we encourage the inclusion of
                supplementary online materials, such as equations, data treatment methods,
                syntax code, example data, code books, case descriptions, research context,
                and detailed narratives. Additionally, images, sound clips, and method
                applications can further enhance your work.
            </p>
            <p>
                If any changes are necessary for the provided supplementary file, please
                submit a completely new file rather than providing a correction list or
                annotating corrections on the previous version. It\'s important to note that
                supplementary files are published as provided, and no formatting is applied
                from the Publisher\'s side.
            </p>
            <p>
                <u>Online Publication Format</u>
            </p>
            <p>
                Please be advised that supplementary material will not be incorporated into
                the manuscript but will be linked on our website in the format provided by
                the author.
            </p>
            <p>
                <u>File Format and Size</u>
            </p>
            <p>
                It\'s essential to ensure that each additional file represents a single
                table, figure, or movie. Please avoid uploading linked worksheets or PDF
                files larger than one sheet. All supporting or supplementary materials
                should be consolidated into a single zipped file, not exceeding 4 MB in
                size. For data sheets, we recommend using Word, Excel, CSV, CDX, FASTA, PDF,
                or Zip formats. Presentations are best provided in PowerPoint, PDF, or Zip
                files. Images can be submitted in CDX, JPEG, EPS, TIFF, or PNG formats.
            </p>
            <p>
                For supplementary audio files, kindly provide them in MP3 format, and for
                videos, use MOV, MPG, AVI, or MPEG formats. Supplementary images must be in
                300 DPI, and RGB color mode should be utilized.
            </p>
            <h3>22. Language Editing</h3>
            <p>
                Prior to manuscript submission, authors are encouraged to have their work
                reviewed by a native English speaker or to utilize professional language
                editing services. This helps minimize the risk of rejection due to language
                inconsistencies. Manuscripts containing grammatical or typographical errors
                will be deemed ineligible for publication and will be returned to the author
                with a recommendation for correction before further consideration in the
                publication process. Authors are encouraged to seek professional editing
                services to address any language inconsistencies and errors in their
                manuscripts.
            </p>
        </div>',
            'aims_and_scope' => '<li>
            <div class="article-titles">
                <h2>Aims And Scope</h2>
                    <h4>Aims</h4>
                    <p>The International Journal of Empirical Research Methods is dedicated to promoting and advancing empirical research methodologies across various disciplines. This journal aims to provide a platform for researchers, scholars, educators, and practitioners to share insights, methodologies, and findings that contribute to the improvement of empirical research practices and the enhancement of evidence-based decision-making.</p>
                    <h4>Scope</h4>
                    <p>The International Journal of Empirical Research Methods welcomes original research articles, methodological reviews, case studies, and technical notes that explore a wide range of empirical research methods across diverse fields. Our scope encompasses various aspects of empirical research, including but not limited to:</p>
                    <h3>1. Research Design And Methodology:</h3>
                    <p>Analyses of research design choices, study frameworks, and methodological approaches employed in empirical investigations.</p>
                    <h3>2. Quantitative Research:</h3>
                    <p>Research utilizing quantitative data analysis techniques, statistical methods, and data-driven interpretations of research questions.</p>
                    <h3>3. Qualitative Research:</h3>
                    <p>Studies employing qualitative data collection methods, content analysis, thematic analysis, and grounded theory approaches.</p>
                    <h3>4. Mixed Methods Research:</h3>
                    <p>Investigations that combine both quantitative and qualitative research methodologies to provide a comprehensive understanding of phenomena.</p>
                    <h3>5. Survey Design And Analysis:</h3>
                    <p>Discussions on survey instrument development, sampling techniques, survey administration, and survey data analysis.</p>
                    <h3>6. Experimental And Quasi-Experimental Designs:</h3>
                    <p>Research using controlled experiments, randomized controlled trials (RCTs), and quasi-experimental approaches.</p>
                    <h3>7. Data Collection And Measurement:</h3>
                    <p>Explorations of data collection techniques, measurement instruments, and strategies for ensuring data validity and reliability.</p>
                    <h3>8. Statistical Analysis Techniques:</h3>
                    <p>Studies on advanced statistical methods, multivariate analysis, regression analysis, and data visualization.</p>
                    <h3>9. Replication And Reproducibility:</h3>
                    <p>Analyses on the importance of replicating empirical studies, promoting transparency, and addressing issues of reproducibility.</p>
                    <p>The International Journal of Empirical Research Methods seeks to facilitate the exchange of knowledge, best practices, and innovations in empirical research methodologies. By showcasing the latest advancements and promoting rigorous research practices, the journal aims to contribute to the continuous improvement of empirical research quality and its impact on scientific knowledge.</p>
                </div>
             </li>',
            'editorial_polices' => ' <li>
            <div class="article-titles">
                <h2>Editorial Policies</h2>
                <p>
                <p>Guinness Press adheres to a strong ethical foundation in scholarly
                    publishing. Our commitment to ethical practices ensures the integrity of the
                    publishing process. Our journals are dedicated to maintaining high standards
                    of ethical behavior by authors, reviewers, and editors. Our editorial staff
                    is well-trained to identify and address ethical concerns effectively.</p>
                <p>Our editorial office diligently investigates ethical matters our readers
                    raise in line with established procedures. The Editorial Board is
                    responsible for addressing disputes related to the validity of research
                    reported in published papers. In cases involving authorship disputes, data
                    ownership, or author misconduct, we may engage external organizations, such
                    as university ethics committees, for resolution. Authors are expected to
                    respond to substantiated allegations as needed.</p>
                </p>
                <h3>Publication Ethics</h3>
                <p> We uphold the highest ethical standards in publishing. Plagiarism, data
                    fabrication, and falsification are strictly prohibited. Authors are required
                    to submit original work, cite sources appropriately, and adhere to ethical
                    guidelines.</p>
                <h3>Authorship and Acknowledgments</h3>
                <p>Authors should have contributed significantly to the research presented. All
                    contributors should be acknowledged appropriately. Any potential conflicts
                    of interest should be disclosed.</p>
                <h3>Copyright and Licensing</h3>
                <p>Authors retain the copyright of their work and grant us a license to publish.
                    We publish under open-access licenses to ensure broad dissemination of
                    knowledge while respecting author rights.</p>
                <h3>Open Access Policy</h3>
                <p>We support open-access publishing to make research freely accessible. Authors
                    may choose open-access options, ensuring their work reaches a wider
                    audience.</p>
                <h3>Data Sharing and Transparency</h3>
                <p>We encourage authors to share data and materials supporting their findings.
                    Transparent reporting enhances reproducibility and credibility.</p>
                <h3>Corrections and Retractions</h3>
                <p> We are committed to rectifying errors promptly. Corrections and retractions
                    will be issued as necessary.</p>
                <h3>Conflicts of Interest</h3>
                <p> Authors, reviewers, and editors must disclose any conflicts of interest that
                    may compromise objectivity. Transparency is essential to maintain the
                    integrity of the review process.</p>
                <h3>Appeals and Disputes</h3>
                <p>Authors have the right to appeal editorial decisions. Disputes are handled
                    objectively and transparently, following established procedures.</p>
                <h3>Privacy and Confidentiality</h3>
                <p> We respect the privacy of authors, reviewers, and readers. Personal
                    information is treated confidentially and used only for journal-related
                    purposes.</p>
                <h3>Editorial Independence</h3>
                <p>Editors make decisions based on academic merit without influence from
                    advertisers, funders, or other parties. Decisions are transparent and
                    impartial.</p>
                <h3>Diversity and Inclusion</h3>
                <p>We are committed to diversity and inclusivity. We welcome submissions from
                    all researchers, regardless of background, and ensure fair and unbiased
                    treatment.</p>
                <h3>Reviewer Guidelines</h3>
                <p>Reviewers must provide constructive, unbiased, and timely feedback.
                    Confidentiality of manuscripts and reviewer identities is maintained.</p>
                <h3>Appeals and Complaints</h3>
                <p>Authors and stakeholders may raise concerns through a formal appeals or
                    complaints process. These concerns will be addressed promptly and
                    objectively.</p>
                <p>We value feedback from authors, reviewers, and readers. We are committed to
                    ongoing improvements in our processes and the excellence of our
                    publications.</p>
                <p>These editorial policies ensure a transparent, ethical, and high-quality
                    publication process. Authors, reviewers, and readers must familiarize
                    themselves with these policies to ensure a smooth and ethical publishing
                    experience.</p>
            </div>
        </li>',
            'author_guideline' => '<li>
            <div class="article-titles">
               <h2>Author`s Guidelines</h2>
              <p>Please read and follow these author guidelines carefully to ensure the submission process is as smooth as possible.</p>
              <h3>Manuscript Types Accepted</h3><p>We accept various types of manuscripts, including:</p>
              <p><b>Research Articles : </b>Original research contributions.</p>
              <p><b>Review Articles : </b>Comprehensive reviews of specific topics.</p>
              <p><b>Short Communications : </b>Concise research findings.</p>
              <p><b>Case Studies : </b>In-depth analyses of specific cases.</p>
              <p><b>Editorials : </b>Invited commentaries from experts.</p>
              <p><b>Letters to the Editor: </b>Short, focused contributions.</p>
              <p><b>Book Reviews : </b>Reviews of recent publications in the field.</p>
              <h3>Manuscript Preparation</h3>
              <p><b>Formatting : </b>Prepare your manuscript according to our journal\'s specific formatting guidelines.</p>
              <p><b>Language : </b>Manuscripts should be written \'English\' and conform to proper grammar and style.</p>
              <p><b>Title:</b>Choose a clear, concise, and informative title that accurately represents the content of your paper.</p>
              <p><b>Abstract : </b>Include an abstract summarizing the objectives, methodology, results, and conclusions of your research.</p>
              <p><b>Keywords : </b>Provide a list of relevant keywords that capture the essence of your work.</p>
              <p><b>Citations and References:</b>Follow a recognized citation style (e.g., APA, MLA) for in-text citations and the References section.</p>
              <h3>Submission Process</h3>
              <p><b>Online Submission : </b>Submit your manuscript through our email address <a href="mailto: info@guinnesspress.org">info@guinnesspress.org</a>.</p>
              <p><b>Cover Letter : </b>Include a cover letter with your submission, briefly outlining the significance and originality of your work.</p>
              <p><b>Peer Review : </b>All submissions undergo a rigorous peer-review process. Please be prepared to respond to reviewer comments and make necessary revisions.</p>
              <h3>Publication Ethics</h3>
              <p><b>Originality : </b>Ensure your work is original and has not been published elsewhere.</p>
              <p><b>Authorship : </b>Clearly list all authors who have contributed substantially to the research.</p>
              <p><b>Plagiarism : </b>Avoid plagiarism by properly citing and referencing sources.</p>
              <h3>Copyright and Licensing</h3>
              <p>Authors retain the copyright to their work but are required to grant \'Guinness Press\' a license to publish and distribute their work.</p>
              <h3>Publication Fees</h3>
              <p>Guinness Press may charge publication fees for production, editing, and distribution costs. These fees, if applicable, will be communicated upon acceptance.</p>
              <h3>Open Access</h3>
              <p>Guinness Press supports open-access publishing.</p>
              <h3>After Acceptance</h3>
              <p><b>Proofreading : </b> Authors will receive galley proofs for final proofreading and corrections.</p>
              <p><b>Publication : </b> Once published, your work will be available on our website and, if applicable, in print.</p>
              <h3>Contact Information</h3>
              <p>For inquiries or assistance, please contact our editorial office at <a href="mailto: info@guinnesspress.org">info@guinnesspress.org</a>. We are here to help you throughout the publication process.</p>
            </div>
         </li>',
                'role_of_eic' => '  <li>
                <div class="article-titles">
                    <h2>Role Of EIC</h2>
                    <p>The Editor-in-Chief (EiC) is the leading role of the journal and makes major
                        decisions for developing and promoting the journal. The EiC has considerable
                        knowledge and expertise about the editorial activities of the journal, and
                        is greatly involved in all key procedures of publication. </p>
                    <h3>Ensuring Scholarly Excellence</h3>
                    <p>The EiC is responsible for maintaining and enhancing the journal\'s scholarly
                        reputation by ensuring that all published articles meet the highest
                        standards of quality, accuracy, and academic rigor. </p>
                    <h3>Editorial Policy Development</h3>
                    <p>The EiC plays a pivotal role in the development and continuous refinement of
                        the journal\'s editorial policies, including ethical guidelines, author
                        guidelines, and peer review processes. </p>
                    <h3>Engaging with the Research Community</h3>
                    <p>The EiC should actively engage with the broader academic and research
                        community, attending conferences, workshops, and events to promote the
                        journal, attract submissions, and stay updated with emerging trends.</p>
                    <h3>Stakeholder Communication</h3>
                    <p>The EiC should facilitate effective communication between the editorial team,
                        authors, reviewers, and readers to ensure transparent and efficient
                        editorial processes. </p>
                    <h3>Conflict Resolution</h3>
                    <p>In situations where conflicts or disputes arise, the EiC should serve as a
                        mediator to find amicable solutions that uphold the journal\'s integrity and
                        reputation. </p>
                    <h3>Editorial Innovation</h3>
                    <p>Encouraging innovative approaches to publishing, such as multimedia content,
                        interactive elements, and data visualization, can help enhance the journal\'s
                        appeal and reach. </p>
                    <h3>Mentoring and Development</h3>
                    <p> The EiC can play a mentoring role for junior members of the editorial team,
                        providing guidance, support, and opportunities for their professional
                        growth. </p>
                    <h3>Building Collaborations</h3>
                    <p>The EiC can actively seek collaborations with institutions, organizations to
                        foster knowledge exchange and cross-disciplinary research. </p>
                    <h3>Suggests/Contributes Special and Themed Issues or Articles: </h3>
                    <p>The Editor-in-Chief initiates and contributes to special issues, enhancing
                        the journal\'s impact through curated topics and insightful articles that
                        enrich the scholarly discourse.</p>
                </div>
            </li>',
            'role_of_ebm' => '<li>
            <div class="article-titles">
                <h2>Role Of EBM</h2>
                <p>The Editorial board is a panel of researchers with expertise in the relevant
                    field. They are appointed by the publishers in consent with the
                    Editor-in-Chief of the journal. Editorial board members are involved in:</p>
                <h3>Expert Peer Review:</h3>
                <p>Editorial Board Members diligently conduct rigorous peer reviews of submitted
                    manuscripts, ensuring adherence to the journal\'s policies and scope. Their
                    critical evaluations contribute to maintaining the scholarly excellence and
                    credibility of the published content.</p>
                <h3>Curating Cutting-Edge Themes:</h3>
                <p>Editorial Board Members take the lead in curating compelling theme issues and
                    hot topics that align with the journal\'s focus. By identifying trending
                    subjects, they drive the exploration of new frontiers in research, fostering
                    thought-provoking discussions among contributors and readers.</p>
                <h3>Engaging Authors and Contributing Expertise:</h3>
                <p>Editorial Board Members actively engage with the scholarly community by
                    extending invitations to potential authors to submit their research.
                    Additionally, they lead by example by contributing their own valuable
                    insights through authored articles, enriching the journal\'s content with
                    their expertise.</p>
                <h3>Expert Review Facilitation:</h3>
                <p>Editorial Board Members play a key role in identifying suitable peer
                    reviewers with specialized knowledge in specific topics. Additionally, they
                    offer valuable second opinions on papers when needed, ensuring thorough and
                    comprehensive evaluations that uphold the journal\'s rigorous review
                    standards.</p>
                <h3>Advocacy and Promotion:</h3>
                <p>Editorial Board Members actively champion the journal\'s visibility by
                    promoting it among authors, readers, and subscribers. They also inspire
                    their colleagues to contribute their research, thereby fostering a vibrant
                    scholarly community that collectively advances the journal\'s impact and
                    reach.</p>
                <h3>Strengthening Editorial Expertise:</h3>
                <p>Editorial Board Members contribute to the growth of the journal by
                    identifying and suggesting accomplished scholars and experts as potential
                    board members. Their recommendations enhance the journal\'s editorial team
                    with diverse perspectives and expertise, enriching the overall quality of
                    the publication.</p>
            </div>
        </li>',
        ]);
    }
}
