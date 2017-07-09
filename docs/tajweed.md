# Tajweed Documentation

## Code Examples

## What Data does this apply to
Data returned by the Global Quran and Al Quran Cloud APIs for the Tajweed edition. For example:
* http://api.alquran.cloud/ayah/24:35/quran-tajweed
* http://api.globalquran.com/ayah/24:35/quran-tajweed

A sample of this data can also be found in the data folder in tajweed.json.

## What Does this do
This library takes the output of the Tajweed edition, and makes HTML and human being friendly.

It uses the table below to parse what the API returns and converts it to something you can understand and style with CSS.

<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Identifier</th>
            <th>Colour</th>
            <th>CSS</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
                    <tr>
                <td class="ham_wasl">hamza-wasl</td>
                <td>[h</td>
                <td style="background-color: #AAAAAA">#AAAAAA</td>
                <td>ham_wasl</td>
                <td>Hamzat ul Wasl</td>
            </tr>
                    <tr>
                <td class="slnt">silent</td>
                <td>[s</td>
                <td style="background-color: #AAAAAA">#AAAAAA</td>
                <td>slnt</td>
                <td>Silent</td>
            </tr>
                    <tr>
                <td class="slnt">laam-shamsiyah</td>
                <td>[l</td>
                <td style="background-color: #AAAAAA">#AAAAAA</td>
                <td>slnt</td>
                <td>Lam Shamsiyyah</td>
            </tr>
                    <tr>
                <td class="madda_normal">madda-normal</td>
                <td>[n</td>
                <td style="background-color: #537FFF">#537FFF</td>
                <td>madda_normal</td>
                <td>Normal Prolongation: 2 Vowels</td>
            </tr>
                    <tr>
                <td class="madda_permissible">madda-permissible</td>
                <td>[p</td>
                <td style="background-color: #4050FF">#4050FF</td>
                <td>madda_permissible</td>
                <td>Permissible Prolongation: 2, 4, 6 Vowels</td>
            </tr>
                    <tr>
                <td class="qlq">qalaqah</td>
                <td>[q</td>
                <td style="background-color: #DD0008">#DD0008</td>
                <td>qlq</td>
                <td>Qalaqah</td>
            </tr>
                    <tr>
                <td class="madda_pbligatory">madda-obligatory</td>
                <td>[o</td>
                <td style="background-color: #2144C1">#2144C1</td>
                <td>madda_pbligatory</td>
                <td>Obligatory Prolongation: 4-5 Vowels</td>
            </tr>
                    <tr>
                <td class="ikhf_shfw">ikhafa-shafawi</td>
                <td>[c</td>
                <td style="background-color: #D500B7">#D500B7</td>
                <td>ikhf_shfw</td>
                <td>Ikhafa' Shafawi - With Meem</td>
            </tr>
                    <tr>
                <td class="ikhf">ikhafa</td>
                <td>[f</td>
                <td style="background-color: #9400A8">#9400A8</td>
                <td>ikhf</td>
                <td>Ikhafa'</td>
            </tr>
                    <tr>
                <td class="idghm_shfw">idgham-shafawi</td>
                <td>[w</td>
                <td style="background-color: #58B800">#58B800</td>
                <td>idghm_shfw</td>
                <td>Idgham Shafawi - With Meem</td>
            </tr>
                    <tr>
                <td class="iqlb">iqlab</td>
                <td>[i</td>
                <td style="background-color: #26BFFD">#26BFFD</td>
                <td>iqlb</td>
                <td>Iqlab</td>
            </tr>
                    <tr>
                <td class="idgh_ghn">idgham-without-ghunnah</td>
                <td>[a</td>
                <td style="background-color: #169200">#169200</td>
                <td>idgh_ghn</td>
                <td>Idgham - With Ghunnah</td>
            </tr>
                    <tr>
                <td class="idgh_w_ghn">idgham-without-ghunnah</td>
                <td>[u</td>
                <td style="background-color: #169200">#169200</td>
                <td>idgh_w_ghn</td>
                <td>Idgham - Without Ghunnah</td>
            </tr>
                    <tr>
                <td class="idgh_mus">idgham-mutajanisayn</td>
                <td>[d</td>
                <td style="background-color: #A1A1A1">#A1A1A1</td>
                <td>idgh_mus</td>
                <td>Idgham - Mutajanisayn</td>
            </tr>
                    <tr>
                <td class="idgh_mus">idgham-mutaqaribayn</td>
                <td>[b</td>
                <td style="background-color: #A1A1A1">#A1A1A1</td>
                <td>idgh_mus</td>
                <td>Idgham - Mutaqaribayn</td>
            </tr>
                    <tr>
                <td class="ghn">ghunnah</td>
                <td>[g</td>
                <td style="background-color: #FF7E1E">#FF7E1E</td>
                <td>ghn</td>
                <td>Ghunnah: 2 Vowels</td>
            </tr>
            </tbody>
</table>

## Show me an example

See the code in www/tajweed.php.

But in a nutshell, it takes:

<div style="direction: rtl;">
```html
"۞ ٱللَّهُ نُورُ [h:9421[ٱ][l[ل]سَّمَ[n[ـٰ]و[n[َٲ]تِ وَ[h:177[ٱ]لْأَرْضِ‌ۚ مَثَلُ نُورِه[n[ِۦ] كَمِشْكَ[s[و][n[ٲ][f:9422[ةٍ ف]ِيهَا مِصْبَاحٌ‌ۖ [h:9423[ٱ]لْمِصْبَاحُ فِى زُجَاجَةٍ‌ۖ [h:9424[ٱ][l[ل]زُّجَاجَةُ كَأَ[g[نّ]َهَا كَوْكَ[f:9425[بٌ د]ُرِّ[a:9426[ىٌّ ي]ُوقَدُ مِ[f:9427[ن ش]َجَرَ[a:9428[ةٍ م]ُّبَ[n[ـٰ]رَكَ[f:9429[ةٍ ز]َيْتُونَ[u:9430[ةٍ ل]َّا شَرْقِيَّ[a:9431[ةٍ و]َلَا غَرْبِيَّ[a:9432[ةٍ ي]َكَادُ زَيْتُهَا يُض[o[ِى]ٓءُ وَلَوْ لَمْ تَمْسَسْهُ نَا[a:9433[رٌ‌ۚ ن]ُّورٌ عَلَىٰ نُو[a:9434[رٍ‌ۗ ي]َهْدِى [h:2084[ٱ]للَّهُ لِنُورِه[n[ِۦ] م[a:476[َن ي]َش[o[َا]ٓءُ‌ۚ وَيَضْرِبُ [h:7110[ٱ]للَّهُ [h:6948[ٱ]لْأَمْثَ[n[ـٰ]لَ لِل[g[نّ]َاسِ‌ۗ وَ[h:72[ٱ]للَّهُ بِكُلِّ شَىْءٍ عَل[p[ِي]مٌ"
```
</div>

and returns:

<div style="direction: rtl;">
```html
۞ ٱللَّهُ نُورُ <tajweed class="ham_wasl" data-type="hamza-wasl" data-description="Hamzat ul Wasl" data-tajweed=":9421">ٱ</tajweed><tajweed class="slnt" data-type="laam-shamsiyah" data-description="Lam Shamsiyyah" data-tajweed="">ل</tajweed>سَّمَ<tajweed class="madda_normal" data-type="madda-normal" data-description="Normal Prolongation: 2 Vowels" data-tajweed="">ـٰ</tajweed>و<tajweed class="madda_normal" data-type="madda-normal" data-description="Normal Prolongation: 2 Vowels" data-tajweed="">َٲ</tajweed>تِ وَ<tajweed class="ham_wasl" data-type="hamza-wasl" data-description="Hamzat ul Wasl" data-tajweed=":177">ٱ</tajweed>لْأَرْضِ‌ۚ مَثَلُ نُورِه<tajweed class="madda_normal" data-type="madda-normal" data-description="Normal Prolongation: 2 Vowels" data-tajweed="">ِۦ</tajweed> كَمِشْكَ<tajweed class="slnt" data-type="silent" data-description="Silent" data-tajweed="">و</tajweed><tajweed class="madda_normal" data-type="madda-normal" data-description="Normal Prolongation: 2 Vowels" data-tajweed="">ٲ</tajweed><tajweed class="ikhf" data-type="ikhafa" data-description="Ikhafa'" data-tajweed=":9422">ةٍ ف</tajweed>ِيهَا مِصْبَاحٌ‌ۖ <tajweed class="ham_wasl" data-type="hamza-wasl" data-description="Hamzat ul Wasl" data-tajweed=":9423">ٱ</tajweed>لْمِصْبَاحُ فِى زُجَاجَةٍ‌ۖ <tajweed class="ham_wasl" data-type="hamza-wasl" data-description="Hamzat ul Wasl" data-tajweed=":9424">ٱ</tajweed><tajweed class="slnt" data-type="laam-shamsiyah" data-description="Lam Shamsiyyah" data-tajweed="">ل</tajweed>زُّجَاجَةُ كَأَ<tajweed class="ghn" data-type="ghunnah" data-description="Ghunnah: 2 Vowels" data-tajweed="">نّ</tajweed>َهَا كَوْكَ<tajweed class="ikhf" data-type="ikhafa" data-description="Ikhafa'" data-tajweed=":9425">بٌ د</tajweed>ُرِّ<tajweed class="idgh_ghn" data-type="idgham-without-ghunnah" data-description="Idgham - With Ghunnah" data-tajweed=":9426">ىٌّ ي</tajweed>ُوقَدُ مِ<tajweed class="ikhf" data-type="ikhafa" data-description="Ikhafa'" data-tajweed=":9427">ن ش</tajweed>َجَرَ<tajweed class="idgh_ghn" data-type="idgham-without-ghunnah" data-description="Idgham - With Ghunnah" data-tajweed=":9428">ةٍ م</tajweed>ُّبَ<tajweed class="madda_normal" data-type="madda-normal" data-description="Normal Prolongation: 2 Vowels" data-tajweed="">ـٰ</tajweed>رَكَ<tajweed class="ikhf" data-type="ikhafa" data-description="Ikhafa'" data-tajweed=":9429">ةٍ ز</tajweed>َيْتُونَ<tajweed class="idgh_w_ghn" data-type="idgham-without-ghunnah" data-description="Idgham - Without Ghunnah" data-tajweed=":9430">ةٍ ل</tajweed>َّا شَرْقِيَّ<tajweed class="idgh_ghn" data-type="idgham-without-ghunnah" data-description="Idgham - With Ghunnah" data-tajweed=":9431">ةٍ و</tajweed>َلَا غَرْبِيَّ<tajweed class="idgh_ghn" data-type="idgham-without-ghunnah" data-description="Idgham - With Ghunnah" data-tajweed=":9432">ةٍ ي</tajweed>َكَادُ زَيْتُهَا يُض<tajweed class="madda_pbligatory" data-type="madda-obligatory" data-description="Obligatory Prolongation: 4-5 Vowels" data-tajweed="">ِى</tajweed>ٓءُ وَلَوْ لَمْ تَمْسَسْهُ نَا<tajweed class="idgh_ghn" data-type="idgham-without-ghunnah" data-description="Idgham - With Ghunnah" data-tajweed=":9433">رٌ‌ۚ ن</tajweed>ُّورٌ عَلَىٰ نُو<tajweed class="idgh_ghn" data-type="idgham-without-ghunnah" data-description="Idgham - With Ghunnah" data-tajweed=":9434">رٍ‌ۗ ي</tajweed>َهْدِى <tajweed class="ham_wasl" data-type="hamza-wasl" data-description="Hamzat ul Wasl" data-tajweed=":2084">ٱ</tajweed>للَّهُ لِنُورِه<tajweed class="madda_normal" data-type="madda-normal" data-description="Normal Prolongation: 2 Vowels" data-tajweed="">ِۦ</tajweed> م<tajweed class="idgh_ghn" data-type="idgham-without-ghunnah" data-description="Idgham - With Ghunnah" data-tajweed=":476">َن ي</tajweed>َش<tajweed class="madda_pbligatory" data-type="madda-obligatory" data-description="Obligatory Prolongation: 4-5 Vowels" data-tajweed="">َا</tajweed>ٓءُ‌ۚ وَيَضْرِبُ <tajweed class="ham_wasl" data-type="hamza-wasl" data-description="Hamzat ul Wasl" data-tajweed=":7110">ٱ</tajweed>للَّهُ <tajweed class="ham_wasl" data-type="hamza-wasl" data-description="Hamzat ul Wasl" data-tajweed=":6948">ٱ</tajweed>لْأَمْثَ<tajweed class="madda_normal" data-type="madda-normal" data-description="Normal Prolongation: 2 Vowels" data-tajweed="">ـٰ</tajweed>لَ لِل<tajweed class="ghn" data-type="ghunnah" data-description="Ghunnah: 2 Vowels" data-tajweed="">نّ</tajweed>َاسِ‌ۗ وَ<tajweed class="ham_wasl" data-type="hamza-wasl" data-description="Hamzat ul Wasl" data-tajweed=":72">ٱ</tajweed>للَّهُ بِكُلِّ شَىْءٍ عَل<tajweed class="madda_permissible" data-type="madda-permissible" data-description="Permissible Prolongation: 2, 4, 6 Vowels" data-tajweed="">ِي</tajweed>مٌ
```
</div>

### Not convinced? Here is an example in the browser...
See it in Firefox: Add <a href="#"></a>

### How do I get those colours to display?

Using the css file at <a href="css/tajweed.css">css/tajweed.css</a>.
