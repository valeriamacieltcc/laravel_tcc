<?php

namespace Database\Seeders;

use App\Models\Vitrine;
use Illuminate\Database\Seeder;

class VitrineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produtos = [

            // =====================================================
            // O BOTICÁRIO - MALBEC
            // =====================================================

            [
                'nome' => 'Malbec Desodorante Colônia',
                'descricao' => 'Desodorante Colônia Malbec 100 ml.',
                'preco' => 174.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoOsSJRGms4pZXEsVIKMJX7Uaw6wrXM0o5m3oBAarcGw&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Malbec Loção Desodorante Hidratante Corporal',
                'descricao' => 'Loção Desodorante Hidratante Corporal Malbec 200 ml.',
                'preco' => 44.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwKwpibSCvwQjf6ZZwgaBzNDlx1Y0-soPEfqAz0Nj5-w&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            // =====================================================
            // O BOTICÁRIO - LILY
            // =====================================================

            [
                'nome' => "L'eau de Lily Desodorante Colônia",
                'descricao' => "Desodorante Colônia L'eau de Lily 75 ml.",
                'preco' => 194.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Lily Óleo Acetinado Corpo e Cabelo',
                'descricao' => 'Óleo Acetinado para Corpo e Cabelo Lily 50 ml.',
                'preco' => 144.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQO5zzePLMRNLt4yh_C-rtETrT-0mnEYIx0FUl9Wr8eYg&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Lily Sabonete em Barra Decorado',
                'descricao' => 'Sabonete em Barra Decorado Lily. 2 unidades de 90 g.',
                'preco' => 57.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3dfyv7v30iToi76VbLoMlhkdcDtwUl_lmbFzAwfYshw&s',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Lily Hair Mist Acetinado',
                'descricao' => 'Hair Mist Acetinado Lily 50 ml.',
                'preco' => 129.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Lily Sérum Leave-in Acetinado Capilar',
                'descricao' => 'Sérum Leave-in Acetinado Capilar Lily 100 ml.',
                'preco' => 72.90,
                'imagem' => 'https://m.media-amazon.com/images/I/41iyMcbEQuL._AC_UF1000,1000_QL80_.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Lily Creme de Banho Acetinado',
                'descricao' => 'Creme de Banho Acetinado Lily 250 ml.',
                'preco' => 104.90,
                'imagem' => 'https://m.media-amazon.com/images/I/51o+8rGv9xL.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Lily Óleo Perfumado Desodorante Corporal',
                'descricao' => 'Óleo Perfumado Desodorante Corporal Lily 150 ml.',
                'preco' => 114.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Lily Shampoo Acetinado',
                'descricao' => 'Shampoo Acetinado Lily 250 ml.',
                'preco' => 64.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Lily Condicionador Acetinado',
                'descricao' => 'Condicionador Acetinado Lily 250 ml.',
                'preco' => 69.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Lily Cashmere Creme Acetinado',
                'descricao' => 'Creme Acetinado Lily Cashmere 250 g.',
                'preco' => 149.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => "L'eau de Lily Soleil Creme Acetinado",
                'descricao' => "Creme Acetinado L'eau de Lily Soleil 250 g.",
                'preco' => 129.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            // =====================================================
            // O BOTICÁRIO - EGEO
            // =====================================================

            [
                'nome' => 'Egeo Bomb Black Desodorante Colônia',
                'descricao' => 'Desodorante Colônia Egeo Bomb Black 90 ml.',
                'preco' => 129.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Egeo Vanilla Vibe Desodorante Colônia',
                'descricao' => 'Desodorante Colônia Egeo Vanilla Vibe 90 ml.',
                'preco' => 129.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            // =====================================================
            // O BOTICÁRIO - HER CODE
            // =====================================================

            [
                'nome' => 'Her Code Eau de Parfum',
                'descricao' => 'Her Code Eau de Parfum 50 ml.',
                'preco' => 254.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Her Code Clímax Creme Aveludado',
                'descricao' => 'Creme Aveludado Desodorante Hidratante Corporal Her Code Clímax 200 g.',
                'preco' => 124.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Her Code Touch Creme Aveludado',
                'descricao' => 'Creme Aveludado Desodorante Hidratante Corporal Her Code Touch 200 g.',
                'preco' => 124.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            // =====================================================
            // O BOTICÁRIO - GLAMOUR
            // =====================================================

            [
                'nome' => 'Glamour Intense Desodorante Colônia',
                'descricao' => 'Glamour Intense Desodorante Colônia 75 ml.',
                'preco' => 199.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Glamour Desodorante Colônia',
                'descricao' => 'Glamour Desodorante Colônia 75 ml.',
                'preco' => 199.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Glamour Secrets Black Desodorante Colônia',
                'descricao' => 'Glamour Secrets Black Desodorante Colônia 75 ml.',
                'preco' => 199.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Glamour Secrets Black Intense',
                'descricao' => 'Glamour Secrets Black Intense Desodorante Colônia 75 ml.',
                'preco' => 164.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Glamour Intense Loção Desodorante Hidratante',
                'descricao' => 'Glamour Intense Loção Desodorante Hidratante Corporal 200 g.',
                'preco' => 69.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            // =====================================================
            // O BOTICÁRIO - MATCH
            // =====================================================

            [
                'nome' => 'Match Shampoo Nutrição Regeneradora',
                'descricao' => 'Match Shampoo Nutrição Regeneradora 300 ml.',
                'preco' => 37.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            // =====================================================
            // O BOTICÁRIO - BOTIK
            // =====================================================

            [
                'nome' => 'Botik Ácido Poliglutâmico Loção Hidratante Antioleosidade',
                'descricao' => 'Botik Ácido Poliglutâmico Loção Hidratante Antioleosidade 110 ml.',
                'preco' => 71.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            // =====================================================
            // O BOTICÁRIO - CUIDE-SE BEM
            // =====================================================

            [
                'nome' => 'Cuide-se Bem Antitranspirante Rosa e Algodão',
                'descricao' => 'Antitranspirante Desodorante em Creme Rosa e Algodão 80 g.',
                'preco' => 25.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            // =====================================================
            // O BOTICÁRIO - CABELOS
            // =====================================================

            [
                'nome' => 'Shampoo Hidratante',
                'descricao' => 'Shampoo Hidratante 250 ml.',
                'preco' => 37.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Máscara Capilar Hidratante',
                'descricao' => 'Máscara Capilar Hidratante 250 g.',
                'preco' => 54.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Condicionador',
                'descricao' => 'Condicionador 250 ml.',
                'preco' => 37.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Shampoo Pasta de Abacate',
                'descricao' => 'Shampoo Pasta de Abacate 230 ml.',
                'preco' => 27.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Máscara Pasta de Abacate',
                'descricao' => 'Máscara Pasta de Abacate 250 ml.',
                'preco' => 42.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Condicionador Pasta de Abacate',
                'descricao' => 'Condicionador Pasta de Abacate 170 ml.',
                'preco' => 32.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            // =====================================================
            // O BOTICÁRIO - BOTI.SUN
            // =====================================================

            [
                'nome' => 'Boti.Sun Protetor Solar Facial Antioleosidade',
                'descricao' => 'Boti.Sun Protetor Solar Facial Antioleosidade Acqua Fluido FPS 70 40 ml.',
                'preco' => 63.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            // =====================================================
            // O BOTICÁRIO - NATIVA SPA
            // =====================================================

            [
                'nome' => 'Nativa SPA Sabonete em Barra Ameixa',
                'descricao' => 'Nativa SPA Sabonete em Barra Ameixa. 3 unidades de 90 g.',
                'preco' => 42.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Sabonete em Barra Ameixa',
                'descricao' => 'Sabonete em Barra Ameixa 90 g.',
                'preco' => 16.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            // =====================================================
            // O BOTICÁRIO - KITS
            // =====================================================

            [
                'nome' => 'Kit Her Code',
                'descricao' => 'Kit Her Code.',
                'preco' => 268.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Kit Cuide-se Bem Deleite',
                'descricao' => 'Kit Cuide-se Bem Deleite.',
                'preco' => 72.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Kit Floratta Blue',
                'descricao' => 'Kit Floratta Blue.',
                'preco' => 215.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Kit Nativa SPA Ameixa',
                'descricao' => 'Kit Nativa SPA Ameixa.',
                'preco' => 132.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Kit Lily Jumbo',
                'descricao' => 'Kit Lily Jumbo.',
                'preco' => 309.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3hOkKQ78-QP2Pc3GF7jUP1xNWeOxRzdSnmmk1SJjwPIDEVzD2EWnIqY1&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
        ];

        // =====================================================
        // CATEGORIAS
        // Adicionado apenas para preencher a categoria
        // automaticamente sem alterar os produtos acima.
        // =====================================================

        foreach ($produtos as &$produto) {

            $texto = strtolower(
                $produto['nome'] . ' ' . $produto['descricao']
            );

            if (
                str_contains($texto, 'shampoo') ||
                str_contains($texto, 'condicionador') ||
                str_contains($texto, 'capilar') ||
                str_contains($texto, 'cabelo') ||
                str_contains($texto, 'hair') ||
                str_contains($texto, 'leave-in') ||
                str_contains($texto, 'máscara capilar')
            ) {
                $produto['categoria'] = 'Cabelo';

            } elseif (
                str_contains($texto, 'colônia') ||
                str_contains($texto, 'eau de parfum') ||
                str_contains($texto, 'parfum') ||
                str_contains($texto, 'perfumado') ||
                str_contains($texto, 'desodorante')
            ) {
                $produto['categoria'] = 'Perfumaria';

            } elseif (
                str_contains($texto, 'protetor solar') ||
                str_contains($texto, 'facial') ||
                str_contains($texto, 'ácido') ||
                str_contains($texto, 'hidratante')
            ) {
                $produto['categoria'] = 'Skincare';

            } else {
                $produto['categoria'] = 'Skincare';
            }
        }

        unset($produto);

        // =====================================================
        // SALVAR PRODUTOS
        // =====================================================

        foreach ($produtos as $produto) {
            Vitrine::updateOrCreate(
                [
                    'nome' => $produto['nome'],
                    'marca' => $produto['marca'],
                ],
                $produto
            );
        }
    }
}