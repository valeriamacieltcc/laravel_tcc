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
                'imagem' => 'https://m.media-amazon.com/images/I/81osmIjrQUL.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Lily Óleo Acetinado Corpo e Cabelo',
                'descricao' => 'Óleo Acetinado para Corpo e Cabelo Lily 50 ml.',
                'preco' => 144.90,
                'imagem' => 'https://www.perfumecia.com.br/wp-content/uploads/2023/12/lily-oleo-corporal.webp',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Lily Sabonete em Barra Decorado',
                'descricao' => 'Sabonete em Barra Decorado Lily. 2 unidades de 90 g.',
                'preco' => 57.90,
                'imagem' => 'https://http2.mlstatic.com/D_NQ_NP_821010-MLB111864068435_052026-O.webp',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Lily Hair Mist Acetinado',
                'descricao' => 'Hair Mist Acetinado Lily 50 ml.',
                'preco' => 129.90,
                'imagem' => 'https://m.media-amazon.com/images/I/51vB8cPrMSL._AC_UF1000,1000_QL80_.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Lily Sérum Leave-in Acetinado Capilar',
                'descricao' => 'Sérum Leave-in Acetinado Capilar Lily 100 ml.',
                'preco' => 72.90,
                'imagem' => 'https://http2.mlstatic.com/D_NQ_NP_705750-MLU77902973626_082024-O.webp',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Lily Creme de Banho Acetinado',
                'descricao' => 'Creme de Banho Acetinado Lily 250 ml.',
                'preco' => 104.90,
                'imagem' => 'https://http2.mlstatic.com/D_NQ_NP_795225-MLU72542360246_112023-O.webp',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Lily Óleo Perfumado Desodorante Corporal',
                'descricao' => 'Óleo Perfumado Desodorante Corporal Lily 150 ml.',
                'preco' => 114.90,
                'imagem' => 'https://m.media-amazon.com/images/I/61+qFAS4b5L._AC_UF350,350_QL80_.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Lily Shampoo Acetinado',
                'descricao' => 'Shampoo Acetinado Lily 250 ml.',
                'preco' => 64.90,
                'imagem' => 'https://http2.mlstatic.com/D_NQ_NP_937571-MLA110581741634_052026-O.webp',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Lily Condicionador Acetinado',
                'descricao' => 'Condicionador Acetinado Lily 250 ml.',
                'preco' => 69.90,
                'imagem' => 'https://http2.mlstatic.com/D_NQ_NP_778610-MLA108556824685_032026-O-condicionador-acetinado-lily-250ml--o-boticario.webp',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Lily Cashmere Creme Acetinado',
                'descricao' => 'Creme Acetinado Lily Cashmere 250 g.',
                'preco' => 149.90,
                'imagem' => 'https://http2.mlstatic.com/D_NQ_NP_756949-MLA108294857193_032026-O-creme-acetinado-hidratante-corporal-lily-cashmere-250g.webp',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => "L'eau de Lily Soleil Creme Acetinado",
                'descricao' => "Creme Acetinado L'eau de Lily Soleil 250 g.",
                'preco' => 129.90,
                'imagem' => 'https://http2.mlstatic.com/D_NQ_NP_937023-MLA105391489696_012026-O-creme-acetinado-leau-de-lily-soleil-floral-200g.webp',
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
                'imagem' => 'https://m.media-amazon.com/images/I/71VmZdKyLsL.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Egeo Vanilla Vibe Desodorante Colônia',
                'descricao' => 'Desodorante Colônia Egeo Vanilla Vibe 90 ml.',
                'preco' => 129.90,
                'imagem' => 'https://m.media-amazon.com/images/I/71U5AiwjKBL.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            [
                'nome' => 'Egeo Dolce Desodorante Colônia',
                'descricao' => 'Desodorante Colônia Egeo Dolce 90 ml.',
                'preco' => 129.90,
                'imagem' => 'https://m.media-amazon.com/images/I/51KCHXRuzrL._AC_UF1000,1000_QL80_.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            
            [
                'nome' => 'Egeo Blue Desodorante Colônia',
                'descricao' => 'Desodorante Colônia Egeo Blue 90 ml.',
                'preco' => 129.90,
                'imagem' => 'https://m.media-amazon.com/images/I/51YwC-ed6+L._AC_UF350,350_QL80_.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            
            [
                'nome' => 'Egeo Red Desodorante Colônia',
                'descricao' => 'Desodorante Colônia Egeo Red 90 ml.',
                'preco' => 129.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRU_ws8lxBgURz9wTSSImxHX1Yi9e7dfjHK2hrD7C9IRQ&s',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            
            [
                'nome' => 'Egeo Bomb Purple Desodorante Colônia',
                'descricao' => 'Desodorante Colônia Egeo Bomb Purple 90 ml.',
                'preco' => 129.90,
                'imagem' => 'https://http2.mlstatic.com/D_NQ_NP_683673-MLB74075675260_012024-O-egeo-bomb-purple-desodorante-colonia-90ml-na-lata.webp',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            
            [
                'nome' => 'Egeo Choc Desodorante Colônia',
                'descricao' => 'Desodorante Colônia Egeo Choc 90 ml.',
                'preco' => 129.90,
                'imagem' => 'https://m.media-amazon.com/images/I/61ghIPVac1L._AC_UF1000,1000_QL80_.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            [
                'nome' => 'Egeo Original Desodorante Colônia',
                'descricao' => 'Desodorante Colônia Egeo Original 90 ml.',
                'preco' => 129.90,
                'imagem' => 'https://cdn.dooca.store/165665/products/boticario-pronta-entrega-o-boticario-egeo-original-desodorante-colonia-90ml-p-1727457889973_600x800+fill_ffffff.jpg?v=1741287780&webp=0',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            
            [
                'nome' => 'Egeo Dolce Illusion Desodorante Colônia',
                'descricao' => 'Desodorante Colônia Egeo Dolce Illusion 90 ml.',
                'preco' => 129.90,
                'imagem' => 'https://i.pinimg.com/736x/ae/1a/71/ae1a716e05e35dbb2a841b797e3a728a.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            
            [
                'nome' => 'Egeo Vanilla Ubesession Desodorante Colônia',
                'descricao' => 'Desodorante Colônia Egeo Vanilla Ubesession 90 ml.',
                'preco' => 164.90,
                'imagem' => 'https://i.pinimg.com/736x/82/29/74/822974f4ed8a425035f73fda4de8f0a3.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Egeo Banana Desodorante Colônia',
                'descricao' => 'Desodorante Colônia Egeo Banana 90 ml.',
                'preco' => 129.90,
                'imagem' => 'https://i.pinimg.com/736x/73/b5/15/73b515b9ddbb9df83bd8351f8f369fdd.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Egeo Hit Desodorante Colônia',
                'descricao' => 'Desodorante Colônia Egeo Hit 90 ml.',
                'preco' => 129.90,
                'imagem' => 'https://http2.mlstatic.com/D_NQ_NP_827673-MLB74128439127_012024-O.webp',
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
                'imagem' => 'https://epocacosmeticos.vteximg.com.br/arquivos/ids/1083626/17590102151024.jpg?v=638947651032500000',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Her Code Clímax Creme Aveludado',
                'descricao' => 'Creme Aveludado Desodorante Hidratante Corporal Her Code Clímax 200 g.',
                'preco' => 124.90,
                'imagem' => 'https://http2.mlstatic.com/D_NQ_NP_662033-MLA90841236078_082025-O.webp',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Her Code Touch Creme Aveludado',
                'descricao' => 'Creme Aveludado Desodorante Hidratante Corporal Her Code Touch 200 g.',
                'preco' => 124.90,
                'imagem' => 'https://acdn-us.mitiendanube.com/stores/002/307/459/products/47ed3091-4041-44c6-a5cf-2533ae5eae54-bot-85935-her-code-touch-creme-acetinado-02-53cfe3bacb1f87a74017456085751786-1024-1024.webp',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            // =====================================================
            // O BOTICÁRIO - GLAMOUR
            // =====================================================


            [
                'nome' => 'Glamour Desodorante Colônia',
                'descricao' => 'Glamour Desodorante Colônia 75 ml.',
                'preco' => 199.90,
                'imagem' => 'https://m.media-amazon.com/images/I/51WCU36FZ9L._AC_UF1000,1000_QL80_.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Glamour Secrets Black Desodorante Colônia',
                'descricao' => 'Glamour Secrets Black Desodorante Colônia 75 ml.',
                'preco' => 199.90,
                'imagem' => 'https://m.media-amazon.com/images/I/61HfLlGVVzL.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],

            [
                'nome' => 'Glamour Secrets Black Intense',
                'descricao' => 'Glamour Secrets Black Intense Desodorante Colônia 75 ml.',
                'preco' => 164.90,
                'imagem' => 'https://i.pinimg.com/736x/c3/35/da/c335daad489008912bd1623e5de476ac.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            [
                'nome' => 'Glamour Just Shine Desodorante Colônia',
                'descricao' => 'Glamour Just Shine Desodorante Colônia 75 ml.',
                'preco' => 164.90,
                'imagem' => 'https://dcdn-us.mitiendanube.com/stores/002/832/629/products/just1-970247f0d9b301847d16847627529779-1024-1024.webp',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            
            
            [
                'nome' => 'Glamour Myriad Desodorante Colônia',
                'descricao' => 'Glamour Myriad Desodorante Colônia 75 ml.',
                'preco' => 164.90,
                'imagem' => 'https://m.media-amazon.com/images/I/51ss5qpmFJL._AC_UF350,350_QL80_.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            
            [
                'nome' => 'Glamour Fever Desodorante Colônia',
                'descricao' => 'Glamour Fever Desodorante Colônia 75 ml.',
                'preco' => 164.90,
                'imagem' => 'https://http2.mlstatic.com/D_NQ_NP_621223-MLA84543626062_052025-O-glamour-fever-desodorante-colonia-75ml-original-e-lacrado.webp',
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
                'imagem' => 'https://m.magazineluiza.com.br/a-static/420x420/shampoo-match-nutricao-regeneradora-300ml-o-boticario/felizrevendas/59583/06da73e9a8b44e006f8052f007a8ea37.jpeg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            [
                'nome' => 'Match Shampoo Oleosidade Controlada',
                'descricao' => 'Match Shampoo Oleosidade Controlada 300 ml.',
                'preco' => 47.90,
                'imagem' => 'https://static.wixstatic.com/media/62fbbf_782e240b38c64fbcbf24a3776cce90fe~mv2.jpg/v1/fill/w_480,h_480,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/62fbbf_782e240b38c64fbcbf24a3776cce90fe~mv2.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            
            [
                'nome' => 'Match Shampoo Science Reconstrução',
                'descricao' => 'Match Shampoo Science Reconstrução 300 ml.',
                'preco' => 47.90,
                'imagem' => 'https://res.cloudinary.com/beleza-na-web/image/upload/w_297,f_auto,fl_progressive,q_auto:best/v1/imagens/product/B56819/e5eb12ce-9ba3-4ebc-8991-6c99010f0802-bot-56819-match-science-reconstrucao-repack-shampoo-frontal-01.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            
            [
                'nome' => 'Match Shampoo Science Crescimento',
                'descricao' => 'Match Shampoo Science Crescimento 300 ml.',
                'preco' => 47.90,
                'imagem' => 'https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:best/v1/imagens/product/B56809/1d589d58-79ab-40ca-a1b5-e33f06859d6f-bot-56809-match-science-crescimento-shampoo-frontal-01.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            
            [
                'nome' => 'Match Shampoo Ciências das Curvas',
                'descricao' => 'Match Shampoo Ciências das Curvas 300 ml.',
                'preco' => 47.90,
                'imagem' => 'https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_avif,fl_progressive,q_auto:eco,w_800/v1/imagens/product/B86671/d1cb0894-694b-4851-80ca-26a50484ab99-bot-52076-match-ciencia-das-curvas-shampoo-frontal-01.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            
            [
                'nome' => 'Match Shampoo Hidratação e Brilho',
                'descricao' => 'Match Shampoo Hidratação e Brilho 300 ml.',
                'preco' => 47.90,
                'imagem' => 'https://m.media-amazon.com/images/I/51f4-t3E8bL.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            
            [
                'nome' => 'Match Shampoo Liso Prolongado',
                'descricao' => 'Match Shampoo Liso Prolongado 300 ml.',
                'preco' => 47.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR53wKWHY8BMR0cO8DdTfdMSyjOLhq6zK-iWeJ6bofiG-Ofa7YvcKKr0Ik&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            [
                'nome' => 'Match Condicionador Nutrição Regeneradora',
                'descricao' => 'Match Condicionador Nutrição Regeneradora 280 ml.',
                'preco' => 49.90,
                'imagem' => 'https://res.cloudinary.com/beleza-na-web/image/upload/w_297,f_auto,fl_progressive,q_auto:best/v1/imagens/product/B59582/3b41ee5e-8ceb-4343-8c16-2ccddf2a4ae3-bot-59582-match-nutricao-regeneradora-condicionador-01.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            
            [
                'nome' => 'Match Condicionador Science Crescimento',
                'descricao' => 'Match Condicionador Science Crescimento 280 ml.',
                'preco' => 49.90,
                'imagem' => 'https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:best/v1/imagens/product/B88007/cfd66bd9-cad9-42d5-b9a5-9cce4ab54f2a-bot-56810-match-science-crescimento-condicionador-frontal-01.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            
            [
                'nome' => 'Match Condicionador Ciência das Curvas',
                'descricao' => 'Match Condicionador e Leave-In Ciência das Curvas 300 ml.',
                'preco' => 49.90,
                'imagem' => 'https://a-static.mlcdn.com.br/450pxx450px/o-boticario-match-condicionador-leave-in-ciencia-das-curvas-300ml/mtcosmetic/b52078/2680855a88d16d8519c4d501ca3fd05b.jpeg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            
            [
                'nome' => 'Match Condicionador Hidratação e Brilho',
                'descricao' => 'Match Condicionador Hidratação e Brilho 280 ml.',
                'preco' => 49.90,
                'imagem' => 'https://m.media-amazon.com/images/I/51pPSn2a0OL.jpg',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            
            [
                'nome' => 'Match Condicionador Liso Prolongado',
                'descricao' => 'Match Condicionador Liso Prolongado 280 ml.',
                'preco' => 49.90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToUsaJETzAYvtGgILHkW6SQ7FVYcYljauiRmPjNPEq__EonQqnt2m5I_3F&s=10',
                'marca' => 'O Boticário',
                'disponivel' => true,
                'link_contato' => 'https://w.app/valeriamaciel',
            ],
            
            [
                'nome' => 'Match Condicionador Hidratação Antifrizz',
                'descricao' => 'Match Condicionador Hidratação Antifrizz 280 ml.',
                'preco' => 49.90,
                'imagem' => 'https://m.media-amazon.com/images/I/51s+rCXPx6L.jpg',
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
    'imagem' => 'https://http2.mlstatic.com/D_NQ_NP_744601-MLA109090421986_042026-O-botik-locao-antioleosidade-poliglutamico-cha-verde-boticario.webp',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],
[
    'nome' => 'Botik Sérum de Alta Potência Ácido Hialurônico',
    'descricao' => 'Botik Sérum de Alta Potência Ácido Hialurônico 30 ml.',
    'preco' => 204.90,
    'imagem' => 'https://i.pinimg.com/736x/15/03/cd/1503cd13f0878eb8c631375c821a9d1b.jpg',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Botik Sérum de Alta Potência Vitamina C 10%',
    'descricao' => 'Botik Sérum de Alta Potência Vitamina C 10% 30 ml.',
    'preco' => 204.90,
    'imagem' => 'https://http2.mlstatic.com/D_NQ_NP_682108-MLU71656913616_092023-O.webp',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Botik Gel de Limpeza Facial Antioxidante Vitamina C',
    'descricao' => 'Botik Gel de Limpeza Facial Antioxidante Vitamina C 200 g.',
    'preco' => 87.90,
    'imagem' => 'https://a-static.mlcdn.com.br/%7Bw%7Dx%7Bh%7D/gel-de-limpeza-facial-antioxidante-botik-vitamina-c-200g-cuidados-para-pele/perfeicaoperfumescosmeticos/8daddb84691511eebf764201ac185056/19f5d82be056f1e77fb815630b2646be.jpeg',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Botik Sérum de Alta Potência Ácido Glicólico 8%',
    'descricao' => 'Botik Sérum de Alta Potência Ácido Glicólico 8% 30 ml.',
    'preco' => 204.90,
    'imagem' => 'https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_avif,fl_progressive,q_auto:eco,w_800/v1/imagens/product/B87600/0183f69c-c850-4545-8c48-44f755839d75-b87600-2.png',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Botik Gel Creme Redutor de Rugas Retinol Puro',
    'descricao' => 'Botik Gel Creme Redutor de Rugas Retinol Puro 30 g.',
    'preco' => 209.90,
    'imagem' => 'https://http2.mlstatic.com/D_NQ_NP_920193-MLU72628082332_112023-O.webp',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Botik Sérum Preenchedor de Rugas Ácido Hialurônico',
    'descricao' => 'Botik Sérum Preenchedor de Rugas Ácido Hialurônico 30 ml.',
    'preco' => 204.90,
    'imagem' => 'https://i.pinimg.com/736x/b7/e4/6b/b7e46b2b251fe1d88e01653dd804587b.jpg',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Botik Máscara Facial Reset Noturno Ácido Glicólico',
    'descricao' => 'Botik Máscara Facial Reset Noturno Ácido Glicólico 40 g.',
    'preco' => 174.90,
    'imagem' => 'https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_avif,fl_progressive,q_auto:eco,w_800/v1/imagens/product/B83768/93d9a028-5957-44fa-b815-3fc650dc6ec0-bot-83768-content-boost-mascara-acido-glicolico-ambientada.jpg',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Botik Balm Labial Hidratante Ácido Hialurônico FPS 15',
    'descricao' => 'Botik Balm Labial Hidratante Ácido Hialurônico FPS 15 3,2 g.',
    'preco' => 47.90,
    'imagem' => 'https://i.pinimg.com/736x/fb/93/79/fb93796014a6d22b6f91468f0f770723.jpg',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],
[
    'nome' => 'Botik Ácido Mandélico + Salicílico Sérum de Alta Potência',
    'descricao' => 'Botik Ácido Mandélico + Salicílico Sérum de Alta Potência 30 ml.',
    'preco' => 204.90,
    'imagem' => 'https://m.media-amazon.com/images/I/41+Rl8MRj1L._AC_UF1000,1000_QL80_.jpg',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Botik Ácido Mandélico + Tranexâmico 5% Sérum de Alta Potência',
    'descricao' => 'Botik Ácido Mandélico + Tranexâmico 5% Sérum de Alta Potência 30 ml.',
    'preco' => 204.90,
    'imagem' => 'https://cdn.shopify.com/s/files/1/0632/5511/8040/files/47321-1-SERUM-DE-ALTA-POTENCIA-ACIDO-MANDELICO-_-TRANEXAMICO-5_-30ML-BOTIK-min.jpg?v=1751562719',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Botik Sérum de Alta Potência Resveratrol e Silício',
    'descricao' => 'Botik Sérum de Alta Potência Resveratrol e Silício 30 ml.',
    'preco' => 204.90,
    'imagem' => 'https://http2.mlstatic.com/D_NQ_NP_726631-MLA80099975066_102024-O.webp',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Botik Sérum Facial Lifting Firmador Peptídeos Pró-Elastina',
    'descricao' => 'Botik Sérum Facial Lifting Firmador Peptídeos Pró-Elastina 30 ml.',
    'preco' => 219.90,
    'imagem' => 'https://i.pinimg.com/736x/63/fd/58/63fd580fbf4aaafdbe3b4eea26667a2e.jpg',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Botik Creme Firmador para Olhos Peptídeos Pró-Elastina',
    'descricao' => 'Botik Creme Firmador para Olhos Peptídeos Pró-Elastina 15 g.',
    'preco' => 159.90,
    'imagem' => 'https://i.pinimg.com/736x/3c/03/1b/3c031bb539e9087883c25508ad5a2fe6.jpg',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Botik Cica Pantenol e Ceramidas Creme Multirreparador Facial Calmante',
    'descricao' => 'Botik Cica Pantenol e Ceramidas Creme Multirreparador Facial Calmante 30 g.',
    'preco' => 89.90,
    'imagem' => 'https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:best/v1/imagens/product/B59876/ead2694a-fcef-4f76-8694-fd0d716915a0-bot-59876-botik-cica-pantenol-ceramidas-creme-multiprotetor-06.jpg',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],


   
 // =====================================================
// O BOTICÁRIO - CUIDE-SE BEM
// =====================================================
[
    'nome' => 'Cuide-se Bem Antitranspirante Rosa e Algodão',
    'descricao' => 'Antitranspirante Desodorante aerosol Rosa e Algodão 80 g.',
    'preco' => 25.90,
    'imagem' => 'https://http2.mlstatic.com/D_NQ_NP_850312-MLB107185623521_022026-O-o-boticario-cuidese-bem-rosa-e-algodao-desodorante-aerossol.webp',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],
[
    'nome' => 'Cuide-se Bem Loção Desodorante Hidratante Corporal Melancia',
    'descricao' => 'Loção Desodorante Hidratante Corporal Cuide-se Bem Melancia 400 ml.',
    'preco' => 78.90,
    'imagem' => 'https://m.media-amazon.com/images/I/41ZEXUykOEL._AC_UF1000,1000_QL80_.jpg',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Cuide-se Bem Loção Hidratante Desodorante Corporal Nuvem',
    'descricao' => 'Loção Hidratante Desodorante Corporal Cuide-se Bem Nuvem 400 ml.',
    'preco' => 78.90,
    'imagem' => 'https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:best/v1/imagens/product/B49888/5dc26e4f-91a9-4ade-9fd8-b4a12290038b-bot-49888-cuide-se-bem-nuvem-locao-400ml-segredinho-02.jpg',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Cuide-se Bem Loção Desodorante Hidratante Corporal Deleite',
    'descricao' => 'Loção Desodorante Hidratante Corporal Cuide-se Bem Deleite 400 ml.',
    'preco' => 78.90,
    'imagem' => 'https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:best/v1/imagens/product/B85124/508c333f-ab09-4ced-9559-c0ea601ee0a4-bot-85124-cuide-se-bem-de-leite-creme-hidratante-400ml-frontal-02.jpg',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Cuide-se Bem Loção Hidratante Desodorante Corporal Deleite Caramelizado',
    'descricao' => 'Loção Hidratante Desodorante Corporal Cuide-se Bem Deleite Caramelizado 400 ml.',
    'preco' => 78.90,
    'imagem' => 'https://m.media-amazon.com/images/I/51kisn21aGL._AC_UF1000,1000_QL80_.jpg',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Cuide-se Bem Loção Desodorante Hidratante Corporal Cereja De Fases',
    'descricao' => 'Loção Desodorante Hidratante Corporal Cuide-se Bem Cereja De Fases 400 ml.',
    'preco' => 78.90,
    'imagem' => 'https://a-static.mlcdn.com.br/420x420/locao-desodorante-hidratante-corporal-cuide-se-bem-cereja-de-fases-400ml-o-boticario/arimakeecosmeticos/85671/5e3c8406455b4bec1647173a31a0e566.jpeg',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Cuide-se Bem Body Splash Desodorante Colônia Beijinho',
    'descricao' => 'Body Splash Desodorante Colônia Cuide-se Bem Beijinho 200 ml.',
    'preco' => 94.90,
    'imagem' => 'https://http2.mlstatic.com/D_NQ_NP_964190-MLU79169698857_092024-O.webp',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Cuide-se Bem Manteiga Hidratante Desodorante Corporal Deleite',
    'descricao' => 'Manteiga Hidratante Desodorante Corporal Cuide-se Bem Deleite 200 g.',
    'preco' => 72.90,
    'imagem' => 'https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:best/v1/imagens/product/B89658/5db2b803-ce2c-46f8-a0ae-905a1a2cacc3-bot-89658-cuide-se-bem-deleite-manteiga-hidratante-03.jpg',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Cuide-se Bem Manteiga Hidratante Desodorante Corporal Deleite Caramelizado',
    'descricao' => 'Manteiga Hidratante Desodorante Corporal Cuide-se Bem Deleite Caramelizado 200 g.',
    'preco' => 72.90,
    'imagem' => 'https://m.media-amazon.com/images/I/61UuWjeGeEL._AC_UF1000,1000_QL80_.jpg',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],
// =====================================================
// O BOTICÁRIO - CUIDE-SE BEM - BODY SPLASH
// =====================================================

[
    'nome' => 'Cuide-se Bem Body Splash Desodorante Colônia Deleite',
    'descricao' => 'Body Splash Desodorante Colônia Cuide-se Bem Deleite 200 ml.',
    'preco' => 94.90,
    'imagem' => 'https://m.media-amazon.com/images/I/61mFRcbYy2L.jpg',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Cuide-se Bem Body Splash Desodorante Colônia Deleite Caramelizado',
    'descricao' => 'Body Splash Desodorante Colônia Cuide-se Bem Deleite Caramelizado 200 ml.',
    'preco' => 94.90,
    'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlzHFxWTlr85ZqQVtMip0gvpxcGwaN49tuPQ0oCjeSoiYW0jUUj_MKlDVW&s=10',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Cuide-se Bem Body Splash Desodorante Colônia Deleite Chocolatudo',
    'descricao' => 'Body Splash Desodorante Colônia Cuide-se Bem Deleite Chocolatudo 200 ml.',
    'preco' => 94.90,
    'imagem' => 'https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:best/v1/imagens/product/B58132/1883be72-1846-4750-a983-b6d3da1ba676-bot-58132-cuide-se-bem-de-leite-chocolatudo-body-splash-segredinho-02.jpg',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Cuide-se Bem Body Splash Desodorante Colônia Nuvem de Alegria',
    'descricao' => 'Body Splash Desodorante Colônia Cuide-se Bem Nuvem de Alegria 200 ml.',
    'preco' => 94.90,
    'imagem' => 'https://acdn-us.mitiendanube.com/stores/004/803/660/products/nuvem-alegria-2-78b1e44328cbecf41017447394237684-640-0.webp',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],
[
    'nome' => 'Cuide-se Bem Body Splash Desodorante Colônia Cereja de Fases',
    'descricao' => 'Body Splash Desodorante Colônia Cuide-se Bem Cereja de Fases 200 ml.',
    'preco' => 94.90,
    'imagem' => 'https://m.media-amazon.com/images/I/51LZBtnurHL._AC_UF1000,1000_QL80_.jpg',
    'marca' => 'O Boticário',
    'disponivel' => true,
    'link_contato' => 'https://w.app/valeriamaciel',
],

[
    'nome' => 'Cuide-se Bem Body Splash Desodorante Colônia Cachos de Uva',
    'descricao' => 'Body Splash Desodorante Colônia Cuide-se Feira Cachos de Uva 200 ml.',
    'preco' => 94.90,
    'imagem' => 'https://a-static.mlcdn.com.br/420x420/body-splash-desodorante-colonia-cuide-se-bem-feira-cachos-de-uva-200ml-o-boticario/lidipresentes/17d37d64917311f0993142010a480899/ab07cc4ca2764d613b7639023b139735.jpeg',
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
                'imagem' => 'https://http2.mlstatic.com/D_NQ_NP_797826-MLB89122476873_082025-O-kit-lily-tradicional.webp',
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