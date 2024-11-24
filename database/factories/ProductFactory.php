<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductData
{
    public const PRODUCTS = [
        'A4 Printer Paper' => 'https://img.freepik.com/free-vector/corporate-identity_53876-43917.jpg?semt=ais_hybrid',
        'Glossy Photo Paper' => 'https://img.freepik.com/free-vector/corporate-identity_53876-43915.jpg?t=st=1732448353~exp=1732451953~hmac=282cc8baa7f296c2dfdbcf68cb99776c93534cc79b72d9406583ebe93eff154f&w=826',
        'Cardstock' => 'https://img.freepik.com/free-photo/monochromatic-still-life-arrangement-with-red-paper_23-2148869805.jpg?semt=ais_hybrid',
        'Envelopes' => 'https://img.freepik.com/free-photo/set-colorful-envelopes_23-2148320456.jpg?semt=ais_hybrid',
        'Cutter Blades' => 'https://img.freepik.com/free-photo/colorful-knife-cutter_74190-2346.jpg?semt=ais_hybrid',
        'Sticky Notes' => 'https://img.freepik.com/free-vector/colorful-reminder-notes-vector-set_53876-81252.jpg?semt=ais_hybrid',
        'Packing Tape' => 'https://img.freepik.com/free-vector/transparent-duct-roll-adhesive-tape_107791-344.jpg?semt=ais_hybrid',
        'Label Paper' => 'https://img.freepik.com/free-photo/plain-gift-tag-with-red-ribbon_1101-457.jpg?semt=ais_hybrid',
        'Colored Construction Paper' => 'https://img.freepik.com/free-vector/colorful-striped-shapes_23-2147655030.jpg?semt=ais_hybrid',
        'Paper Towels' => 'https://img.freepik.com/free-vector/toilet-paper-kitchen-towels-rolls-realistic-composition-with-transparent-background-wide-soft-tissue-kitchen-rolls-vector-illustration_1284-82258.jpg?semt=ais_hybrid',
        'Kraft Paper' => 'https://img.freepik.com/free-vector/realistic-grain-paper-texture_23-2149103333.jpg?semt=ais_hybrid',
        'Tissue Paper' => 'https://img.freepik.com/free-vector/toilet-tissue-roll-element-vector_53876-175211.jpg?semt=ais_hybrid',
        'Notebook Paper' => 'https://img.freepik.com/free-vector/hand-drawn-blue-lined-paper-background_23-2151168913.jpg?semt=ais_hybrid',
        'Index Cards' => 'https://img.freepik.com/free-photo/close-up-business-cards-wooden-desk_1232-818.jpg?semt=ais_hybrid',
        'Greeting Cards' => 'https://img.freepik.com/free-vector/colorful-love-composition-with-flat-design_23-2147838458.jpg?semt=ais_hybrid',
        'Wrapping Paper' => 'https://img.freepik.com/free-vector/hand-drawn-christmas-pattern-collection_23-2148788680.jpg?semt=ais_hybrid',
        'File Folders' => 'https://img.freepik.com/free-vector/notebook-diary-icon-vector-illustration_53876-34722.jpg?semt=ais_hybrid',
        'Post-it Notes' => 'https://img.freepik.com/free-vector/multicolor-sticky-notes-collection_1232-4623.jpg?semt=ais_hybrid',
        'Paper Cups' => 'https://img.freepik.com/free-vector/small-white-paper-cup-isolated-white_1284-45621.jpg?semt=ais_hybrid',
    ];
}
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
//        $productName = array_rand(ProductData::PRODUCTS);
//        $imageUrl = ProductData::PRODUCTS[$productName];

        $product = $this->faker->randomElement(array_keys(ProductData::PRODUCTS));
        // Randomly pick a company and its URL
        $companyName = $product;
        $imageUrl = ProductData::PRODUCTS[$product];

        return [
            'name' => $companyName,
            'image_url' => $imageUrl,
            'price' => $this->faker->randomFloat(2, 5, 30),
        ];
    }
}
