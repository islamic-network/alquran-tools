<?php
namespace AlQuranCloud\Tools\Parser;
use AlQuranCloud\Tools\Parser\Tashkeel;

class Tajweed
{
    const WASL = 1;
    const SILENT = 2;
    const LAAM_SHAMSIYAH = 3;
    const MADDA_NORMAL = 4;
    const MADDA_PERMISSIBLE = 5;
    const MADDA_NECESSARY = 6;
    const QALAQAH = 6;
    const MADDA_OBLIGATORY = 7;
    const IKHAFA_SHAFAWI = 8;
    const IDGHAM_SHAFAWI = 9;
    const IQLAB = 10;
    const IDGHAM_GHUNNAH = 11;
    const IDGHAM_NO_GHUNNAH = 12;
    const IDGHAM_MUTAJANISAYN = 13;
    const IDGHAM_MUTAQARIBAYN = 14;
    const GHUNNAH = 15;
    const IKHAFA = 16;

    private $meta;

    private $mapper;

    private $tashkeel;


    /**
     * [__construct description]
     */
    public function __construct()
    {
        $this->tashkeel = new Tashkeel();
        $this->createMetaData();
        $this->createMapper();
    }

    private function createMetaData()
    {
        $this->meta = [
            self::WASL => [
                    'identifier' => '[h',
                    'type' => 'hamza-wasl',
                    'description' => 'Hamzat ul Wasl',
                    'default_css_class' => 'ham_wasl',
                    'html_color' => '#AAAAAA'
            ],
            self::SILENT => [
                    'identifier' => '[s',
                    'type' => 'silent',
                    'description' => 'Silent',
                    'default_css_class' => 'slnt',
                    'html_color' => '#AAAAAA'
            ],
            self::LAAM_SHAMSIYAH => [
                    'identifier' => '[l',
                    'type' => 'laam-shamsiyah',
                    'description' => 'Lam Shamsiyyah',
                    'default_css_class' => 'slnt',
                    'html_color' => '#AAAAAA'
            ],
            self::MADDA_NORMAL => [
                    'identifier' => '[n',
                    'type' => 'madda-normal',
                    'description' => 'Normal Prolongation: 2 Vowels',
                    'default_css_class' => 'madda_normal',
                    'html_color' => '#537FFF'
            ],
            self::MADDA_PERMISSIBLE => [
                    'identifier' => '[p',
                    'type' => 'madda-permissible',
                    'description' => 'Permissible Prolongation: 2, 4, 6 Vowels',
                    'default_css_class' => 'madda_permissible',
                    'html_color' => '#4050FF'
            ],
            self::MADDA_NECESSARY => [
                    'identifier' => '[m',
                    'type' => 'madda-necesssary',
                    'description' => 'Necessary Prolongation: 6 Vowels',
                    'default_css_class' => 'madda_necessary',
                    'html_color' => '#000EBC'
            ],
            self::QALAQAH => [
                    'identifier' => '[q',
                    'type' => 'qalaqah',
                    'description' => 'Qalaqah',
                    'default_css_class' => 'qlq',
                    'html_color' => '#DD0008'
            ],
            self::MADDA_OBLIGATORY => [
                    'identifier' => '[o',
                    'type' => 'madda-obligatory',
                    'description' => 'Obligatory Prolongation: 4-5 Vowels',
                    'default_css_class' => 'madda_pbligatory',
                    'html_color' => '#2144C1'
            ],
            self::IKHAFA_SHAFAWI => [
                    'identifier' => '[c',
                    'type' => 'ikhafa-shafawi',
                    'description' => 'Ikhafa\' Shafawi - With Meem',
                    'default_css_class' => 'ikhf_shfw',
                    'html_color' => '#D500B7'
            ],
            self::IKHAFA => [
                    'identifier' => '[f',
                    'type' => 'ikhafa',
                    'description' => 'Ikhafa\'',
                    'default_css_class' => 'ikhf',
                    'html_color' => '#9400A8'
            ],
            self::IDGHAM_SHAFAWI => [
                    'identifier' => '[w',
                    'type' => 'idgham-shafawi',
                    'description' => 'Idgham Shafawi - With Meem',
                    'default_css_class' => 'idghm_shfw',
                    'html_color' => '#58B800'
            ],
            self::IQLAB => [
                    'identifier' => '[i',
                    'type' => 'iqlab',
                    'description' => 'Iqlab',
                    'default_css_class' => 'iqlb',
                    'html_color' => '#26BFFD'
            ],
            self::IDGHAM_GHUNNAH => [
                    'identifier' => '[a',
                    'type' => 'idgham-without-ghunnah',
                    'description' => 'Idgham - With Ghunnah',
                    'default_css_class' => 'idgh_ghn',
                    'html_color' => '#169200'
            ],
            self::IDGHAM_NO_GHUNNAH => [
                    'identifier' => '[u',
                    'type' => 'idgham-without-ghunnah',
                    'description' => 'Idgham - Without Ghunnah',
                    'default_css_class' => 'idgh_w_ghn',
                    'html_color' => '#169200'
            ],
            self::IDGHAM_MUTAJANISAYN => [
                    'identifier' => '[d',
                    'type' => 'idgham-mutajanisayn',
                    'description' => 'Idgham - Mutajanisayn',
                    'default_css_class' => 'idgh_mus',
                    'html_color' => '#A1A1A1'
            ],
            self::IDGHAM_MUTAQARIBAYN => [
                    'identifier' => '[b',
                    'type' => 'idgham-mutaqaribayn',
                    'description' => 'Idgham - Mutaqaribayn',
                    'default_css_class' => 'idgh_mus',
                    'html_color' => '#A1A1A1'
            ],
            self::GHUNNAH => [
                    'identifier' => '[g',
                    'type' => 'ghunnah',
                    'description' => 'Ghunnah: 2 Vowels',
                    'default_css_class' => 'ghn',
                    'html_color' => '#FF7E1E'
            ],

        ];
    }

    public function createMapper()
    {
      $this->mapper = [
          'ا' => [
              'before' => false,
              'after' => false,
              'variations' => ['ا', 'آ', 'ٱ', 'اَ', 'اِ', 'اُ', 'اْ', 'اً', 'اّ']
          ],
          'إ' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('إ')
          ],
          'أ' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('أ')
          ],
          'ب' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('ب')
          ],
          'ت' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('ت')
          ],
          'ث' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('ث')
          ],
          'ج' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('ج')
          ],
          'ح' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('ح')
          ],
          'خ' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('خ')
          ],
          'د' => [
              'before' => true,
              'after' => false,
              'variations' => $this->tashkeel->get('د')
          ],
          'ذ' => [
              'before' => true,
              'after' => false,
              'variations' => $this->tashkeel->get('ذ')
          ],
          'ر' => [
              'before' => true,
              'after' => false,
              'variations' => $this->tashkeel->get('ر')
          ],
          'ز' => [
              'before' => true,
              'after' => false,
              'variations' => $this->tashkeel->get('ز')
          ],
          'ط' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('ط')
          ],
          'ظ' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('ظ')
          ],
          'ك' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('ك')
          ],
          'ق' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('ق')
          ],
          'س' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('س')
          ],
          'ش' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('ش')
          ],
          'ص' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('ص')
          ],
          'ض' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('ض')
          ],
          'ع' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('ع')
          ],
          'غ' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('غ')
          ],
          'ف' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('ف')
          ],
          'ل' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('ل')
          ],
          'م' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('م')
          ],
          'ن' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('ن')
          ],
          'و' => [
              'before' => true,
              'after' => false,
              'variations' => $this->tashkeel->get('و')
          ],
          'ؤ' => [
              'before' => true,
              'after' => false,
              'variations' => $this->tashkeel->get('ؤ')
          ],
          'ه' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('ه')
          ],
          'ة' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('ة')
          ],
          'ى' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('ى')
          ],
          'ئ' => [
              'before' => true,
              'after' => true,
              'variations' => $this->tashkeel->get('ئ')
          ],
          'ي' => [
              'before' => true,
              'after' => true,
              'variations' => ['يَ', 'يِ', 'يُ', 'يْ', 'يّ']
          ],

          'ء' => [
              'before' => false,
              'after' => false,
              'variations' => $this->tashkeel->get('ء')
          ]
      ];
    }

    /**
     * Parses tajweed from the GlobalQuran and AlQuran APIs to return markup
     * @param  string  $text      Verse text
     * @param  boolean $fixWebkit Tries to fix for Chrome and Safari. This is experimental and has known problems.
     * @return string             Parsed text that can be used to display tajweed
     */
    public function parse($text, $fixWebkit = false)
    {
        if ($fixWebkit) {
            return
                $this->webkitFix(
                    $this->closeParsing(
                        $this->parseTajweed($text)
                    )
                );
            }

            return
                $this->closeParsing(
                    $this->parseTajweed($text)
                );
    }

    /**
     * [parseTajweed description]
     * @param  string $text Verse text
     * @return String
     */
    public function parseTajweed($text, $simplify = false)
    {
        foreach ($this->meta as $meta) {
            if ($simplify) {
                $text = str_replace(
                    $meta['identifier'],
                    '<tajweed',
                    $text
                );
            } else { 
                $text = str_replace(
                    $meta['identifier'],
                    '<tajweed class="' . $meta['default_css_class']. '" data-type="' . $meta['type'] . '" data-description="' .$meta['description'] . '" data-tajweed="',
                    $text);
            }
        }

        return $text;
    }



    /**
     * This method tries to add in a fix for webkit browsers that break with <tags> inside a string.
     * It does so by using the &zwj; joiner, but that does not always work. It's not smart enough to know,
     * for instance, when properly connect a meem to a yaa, among other things. Your best bet is to not use
     * this but use Firefox or the like.
     * See https://stackoverflow.com/questions/11155849/partially-colored-arabic-word-in-html
     * and https://bugs.webkit.org/show_bug.cgi?id=6148.
     * @param  string $text Parsed tajweed verse with <tajweed> tags
     * @return string
     */
    public function webkitFix($text)
    {
        // Identify Tajweed tags, if there is not a space before or after, add &zwj;
        // After
        $text = preg_replace('/<\/tajweed>(\S)/', '&zwj;${0}', $text);
        // Before
        $text = preg_replace('/(\S)<tajweed class="(.*?)" data-type="(.*?)" data-description="(.*?)" data-tajweed="(.*?)">(\S)/', '${1}<tajweed class="${2}" data-type="${3}" data-description="${4}" data-tajweed="${5}">&zwj;&zwj;${6}', $text);

        // Let's remove all joiners where not needed for an Alif and a Waw
        $text = str_replace(
            ['ٱ&zwj;'],
            ['ٱ'],
            $text);

        return $text;
    }

    /**
     * [closeParsing description]
     * @param  string $text
     * @return string
     */
    public function closeParsing($text)
    {
        $text = str_replace(['[', ']'], ['">', '</tajweed>'], $text);

        return $text;
    }

    /**
     * Returns tajweed meta settings
     * @return array The Tajweed metadata array
     */
    public function getMeta()
    {
        return $this->meta;
    }
}
