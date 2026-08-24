<?php

namespace Database\Seeders;

use App\Models\Publication;
use Illuminate\Database\Seeder;

class PublicationSeeder extends Seeder
{
    public function run(): void
    {
        $scholarUrl = 'https://scholar.google.com/citations?user=Kr6MOa0AAAAJ&hl=en&oi=ao';

        $publications = [
            // Grants
            [
                'title' => 'Sustainable Healthcare Management Systems: Economic Vision & Online Readiness',
                'authors' => 'Dr. Muhammad Shakil Ahmad (Principal Investigator)',
                'journal' => 'Ministry of Higher Education & Scientific Research (Oman Grant)',
                'year' => 2021,
                'type' => 'Grant',
                'abstract' => 'Research grant awarded to evaluate national digital health infrastructure and economic strategic vision implementation.',
                'doi' => 'GRANT-OMAN-2021',
                'url' => $scholarUrl,
                'is_highlighted' => true,
            ],
            [
                'title' => 'Higher Education Quality & Digital Transformation Assessment',
                'authors' => 'Dr. Muhammad Shakil Ahmad (Lead Researcher)',
                'journal' => 'Higher Education Commission (HEC), Pakistan Grant',
                'year' => 2020,
                'type' => 'Grant',
                'abstract' => 'Nationwide grant project assessing institutional readiness and faculty development for online higher education delivery.',
                'doi' => 'GRANT-HEC-2020',
                'url' => $scholarUrl,
                'is_highlighted' => true,
            ],

            // Systematic Literature Reviews
            [
                'title' => 'Green Employee Empowerment: A Systematic Literature Review on State-of-art in Green Human Resource Management',
                'authors' => 'Tariq, S., Jan, F. A., Ahmad, M. S.',
                'journal' => 'Quality & Quantity: International Journal of Methodology, 50(1), 237-269',
                'year' => 2016,
                'type' => 'Systematic Review',
                'abstract' => 'Systematic literature review synthesizing state-of-the-art developments in green human resource management and employee empowerment.',
                'doi' => '10.1007/s11135-014-0146-0',
                'url' => $scholarUrl,
                'is_highlighted' => true,
            ],
            [
                'title' => 'Parenting styles and aggression among young adolescents: a systematic review of literature',
                'authors' => 'Ahmad, M. S.',
                'journal' => 'Community Mental Health Journal',
                'year' => 2019,
                'type' => 'Systematic Review',
                'abstract' => 'Systematic synthesis investigating associations between parenting paradigms and adolescent behavioral aggression.',
                'doi' => '10.1007/s10597-019-00412-x',
                'url' => $scholarUrl,
                'is_highlighted' => true,
            ],
            [
                'title' => 'Parenting styles and academic achievement of young adolescents: A systematic literature review',
                'authors' => 'Ahmad, M. S.',
                'journal' => 'Quality and Quantity: International Journal of Methodology',
                'year' => 2015,
                'type' => 'Systematic Review',
                'abstract' => 'Comprehensive literature review mapping parenting dimensions to adolescent educational achievement.',
                'doi' => '10.1007/s11135-014-0062-3',
                'url' => $scholarUrl,
                'is_highlighted' => true,
            ],

            // Peer-Reviewed Journal Articles
            [
                'title' => 'Using food choice motives to model Pakistani ethnic food purchase intention among tourists',
                'authors' => 'Ahmad, M. S., et al.',
                'journal' => 'British Food Journal, 22(6), 1731-1753',
                'year' => 2020,
                'type' => 'Journal Article',
                'abstract' => 'Modeling tourist purchase intentions for ethnic cuisine based on multidimensional food choice motives.',
                'doi' => '10.1108/BFJ-08-2019-0604',
                'url' => $scholarUrl,
                'is_highlighted' => false,
            ],
            [
                'title' => 'Performance Appraisal Satisfaction and Turnover Intention: The Mediating Role of Work Engagement',
                'authors' => 'Memon, M., Ting, H., & Ahmad, M. S.',
                'journal' => 'Management Decision, 58(6), 1053-1066',
                'year' => 2020,
                'type' => 'Journal Article',
                'abstract' => 'Empirical study on appraisal satisfaction, employee retention, and mediation of work engagement.',
                'doi' => '10.1108/MD-06-2018-0685',
                'url' => $scholarUrl,
                'is_highlighted' => false,
            ],
            [
                'title' => 'Health Practitioners interaction with Pharmaceutical Sales Representatives: Impact on Prescription Behaviour',
                'authors' => 'Faisal, A., & Ahmad, M. S.',
                'journal' => 'Community Mental Health Journal, 56, 456–463',
                'year' => 2019,
                'type' => 'Journal Article',
                'abstract' => 'Evaluating pharmaceutical marketing interactions and medical practitioner prescription behaviors.',
                'doi' => '10.1007/s10597-019-00489-3',
                'url' => $scholarUrl,
                'is_highlighted' => false,
            ],
            [
                'title' => 'Factors that Influence County Government Expenditures and Revenues: A Study of Florida County Governments',
                'authors' => 'Cho, K. W., Brower, R., & Ahmad, M. S.',
                'journal' => 'Lex localis - Journal of Local Self-Government, 16(1), 47-76',
                'year' => 2018,
                'type' => 'Journal Article',
                'abstract' => 'Fiscal determinants and governance factors shaping county government revenue and expenditure patterns in Florida.',
                'doi' => '10.4335/16.1.47-76(2018)',
                'url' => $scholarUrl,
                'is_highlighted' => false,
            ],
            [
                'title' => 'Factors Affecting Purchase Intention and Social Media Publicity of Green Products: The Mediating Role of Concern for Consequences',
                'authors' => 'Zahid, M. M., Ali, B., Ahmad, M. S., & Ramayah, T.',
                'journal' => 'Corporate Social Responsibility & Environmental Management, 25(3), 225-236',
                'year' => 2018,
                'type' => 'Journal Article',
                'abstract' => 'Structural model assessing green product purchase intentions and social media publicity drivers.',
                'doi' => '10.1002/csr.1450',
                'url' => $scholarUrl,
                'is_highlighted' => false,
            ],
            [
                'title' => 'Barriers to empowerment: Assessment of community-led local development organizations in Pakistan',
                'authors' => 'Ahmad, M. S., & Abu Talib, N.',
                'journal' => 'Renewable and Sustainable Energy Reviews, 74, 1361–1370',
                'year' => 2017,
                'type' => 'Journal Article',
                'abstract' => 'Assessment of community-led local development frameworks, organizational capacity, and empowerment constraints.',
                'doi' => '10.1016/j.rser.2016.11.161',
                'url' => $scholarUrl,
                'is_highlighted' => true,
            ],
            [
                'title' => 'Impact of Islamic Work Ethics on organizational Citizenship Behavior among Female Academic Staff: The mediating role of employee engagement',
                'authors' => 'Uzma, T., & Ahmad, M. S.',
                'journal' => 'Applied Research in Quality of Life, 12(3), 693-717',
                'year' => 2017,
                'type' => 'Journal Article',
                'abstract' => 'Investigating work ethics, employee engagement, and citizenship behavior among female university faculty.',
                'doi' => '10.1007/s11482-016-9484-4',
                'url' => $scholarUrl,
                'is_highlighted' => false,
            ],
            [
                'title' => 'Student Well-Being in Chinese Adolescents in Hong Kong: Theory, Intervention and Research',
                'authors' => 'Wahab, A., & Ahmad, M. S.',
                'journal' => 'Applied Research in Quality of Life, 12(3), 761-763',
                'year' => 2017,
                'type' => 'Journal Article',
                'abstract' => 'Critical review of adolescent well-being interventions, theoretical frameworks, and educational policy.',
                'doi' => '10.1007/s11482-016-9488-0',
                'url' => $scholarUrl,
                'is_highlighted' => false,
            ],
            [
                'title' => 'Forecasting the consumption of gasoline in transport sector in Pakistan based on ARIMA model',
                'authors' => 'Bhutto, A. W., & Ahmad, M. S.',
                'journal' => 'Environmental Progress & Sustainable Energy, 36(5), 1490–1497',
                'year' => 2017,
                'type' => 'Journal Article',
                'abstract' => 'Time-series ARIMA econometric modeling for gasoline consumption forecasting in national transportation.',
                'doi' => '10.1002/ep.12586',
                'url' => $scholarUrl,
                'is_highlighted' => false,
            ],
            [
                'title' => 'Exploring Resources, Life-balance and Wellbeing of Women who work in a Global Context',
                'authors' => 'Khalid, S., Ahmad, M. S., Jadoon, I. K., Bilal, S., & Farooq, N.',
                'journal' => 'Applied Research in Quality of Life, 12(4), 1029-1031',
                'year' => 2017,
                'type' => 'Journal Article',
                'abstract' => 'Qualitative examination of resource allocation, work-life balance, and well-being among women in global careers.',
                'doi' => '10.1007/s11482-016-9498-y',
                'url' => $scholarUrl,
                'is_highlighted' => false,
            ],
            [
                'title' => 'Analysis of community empowerment on projects sustainability: Moderating role of sense of community',
                'authors' => 'Ahmad, M. S., & Abu Talib, N.',
                'journal' => 'Social Indicators Research, 129(3), 1039-1056',
                'year' => 2016,
                'type' => 'Journal Article',
                'abstract' => 'Evaluating community empowerment dimensions and project longevity with moderating effects of social cohesion.',
                'doi' => '10.1007/s11205-015-1161-0',
                'url' => $scholarUrl,
                'is_highlighted' => true,
            ],
            [
                'title' => 'Effect of Multidimensional Top Management Support on Project Success: An Empirical investigation',
                'authors' => 'Ahmad, R., Azmi, N., & Ahmad, M. S.',
                'journal' => 'Quality and Quantity: International Journal of Methodology, 50(1), 151-176',
                'year' => 2016,
                'type' => 'Journal Article',
                'abstract' => 'Empirical testing of top management support dimensions on project completion metrics and stakeholder satisfaction.',
                'doi' => '10.1007/s11135-014-0142-4',
                'url' => $scholarUrl,
                'is_highlighted' => false,
            ],
            [
                'title' => 'Relationship between parenting styles and academic performance of adolescents: mediating role of self-efficacy',
                'authors' => 'Masud, H., Ahmad, M. S., Jan, F. A., & Jamil, A.',
                'journal' => 'Asia Pacific Education Review, 17(1), 121-131',
                'year' => 2016,
                'type' => 'Journal Article',
                'abstract' => 'Structural mediation model testing parenting styles, academic self-efficacy, and student GPA outcomes.',
                'doi' => '10.1007/s12564-015-9413-6',
                'url' => $scholarUrl,
                'is_highlighted' => false,
            ],
        ];

        foreach ($publications as $p) {
            Publication::updateOrCreate(['title' => $p['title']], $p);
        }
    }
}
