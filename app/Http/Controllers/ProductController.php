<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;


/**
 * @OA\Schema(
 *     schema="Product",
 *     type="object",
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         example="Product 1"
 *     ),
 *     @OA\Property(
 *         property="price",
 *         type="number",
 *         format="float",
 *         example=100.50
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         example="This is a sample product description."
 *     )
 * )
 */
class ProductController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/product/get",
     *     summary="Get product detail by SKU",
     *     tags={"Product"},
     *     @OA\Parameter(
     *         name="access_token",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="product_sku",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Product")
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized",
     *         @OA\JsonContent(
     *             @OA\Property(property="error", type="string", example="Unauthorized")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Product not found",
     *         @OA\JsonContent(
     *             @OA\Property(property="error", type="string", example="Product not found")
     *         )
     *     )
     * )
     */
    public function getProductDetail(Request $request)
    {
        // ค่า Token สมมุติ
        $validTokens = ['token1', 'token2', 'token3'];

        // ตรวจสอบ access_token และ product_sku
        $accessToken = $request->input('access_token');
        $productSku = $request->input('product_sku');

        // ตรวจสอบ access_token (ตัวอย่างง่ายๆ)
        if (!in_array($accessToken, $validTokens)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // ดึงข้อมูล product detail จาก database หรือแหล่งข้อมูลอื่นๆ
        $product = $this->getProductBySku($productSku);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        return response()->json($product);
    }

    private function getProductBySku($sku)
    {
        // ตัวอย่างข้อมูล product
        $products = [
            'SKU123' => [
                'name' => 'Product 1',
                'price' => 100.50,
                'description' => 'This is product 1',
            ],
            'SKU456' => [
                'name' => 'Product 2',
                'price' => 200.75,
                'description' => 'This is product 2',
            ],
        ];

        return $products[$sku] ?? null;
    }
}