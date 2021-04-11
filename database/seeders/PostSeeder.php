<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run()
    {
        for($i=0;$i<10;$i++) {
            DB::table('posts')->insert(['title' => 'Privilégios', 'article' => '
            <p>Você já parou para pensar sobre os privilégios que tem? Podem ser muitos ou não, mas se olhar com calma aposto que vai achar pelo menos um. É madrugada do Dia dos Pais, eu perdi o sono e lembrei de uma conversa que tive com um amigo em que eu fui capaz de dizer que “tenho uma família funcional demais pra conseguir entender” algumas motivações de gente que não tem a mesma sorte.</p>

            <p>Aí agora estou relembrando essa frase e o quanto ela soa ridícula. E também pensando em quão felizarda sou por ter uma ‘família funcional demais’. É bem tradicional, mas é incrível.</p>

            <p>Lembro que eu já era adulta quando tive contato com outras famílias, menos funcionais. Nas quais a carga pende mais pra uma pessoa só, que de tão exausta de ser o pilar de um lar inteiro, acaba fazendo a convivência um troço difícil para todos ao redor. Afinal, ninguém fez a vida mais fácil pra ela, por que ela o faria para alguém?</p>

            <p>Mas enfim… até meus 18 anos, eu acreditava piamente que todo mundo que tinha se imaculado a ter uma família tinha aceitado sem espernear os papéis que ser pai, mãe, companheiro e tudo o mais lhe designava. Mas não é bem assim. E tudo bem, não precisa ser.</p>

            <p>Nem toda mãe precisa cozinhar – e a minha manda maravilhosamente bem nesse quesito; nem todo pai precisa ser o provedor absoluto – embora o meu se afirme assim e também construindo coisas, de sofá a estantes, passando por triciclos e bicicletas muito diferenciadas na minha infância.</p>

            <p>Eu vou chegando num ponto da minha história em que esse momento pode estar se aproximando. E o fato de eu não me sentir ‘recatada e do lar’ me gerava uma insegurança do tipo: nunca serei tão boa mãe quanto a minha, nunca terei um companheiro tão bom pai quanto o meu. Acho que o “problema” da família funcional demais é criar um padrão quase inalcançável de ser seguido.</p>

            <p>Mas agora eu busco ressignificar coisas que sempre atribui a cada membro dentro da família ‘funcional’. Eu posso ser uma excelente mãe, mesmo não sendo um primor na cozinha. Meu companheiro não precisa – e nem deve – ser provedor absoluto. Eu trabalhei, e trabalho muito, pra ser capaz de dar conta do meu próprio sustento.</p>

            <p>Para a família ser funcional, hoje, eu acredito muito mais que cada um deve viver sua verdade, se empenhar pra ser útil e seguir o bonde. Enfim. Era isso que eu queria compartilhar nessa madrugada.</p>
            ', 'category_id' => '1', 'user_id' => '2',]);
            DB::table('posts')->insert(['title' => 'Conhece-te a ti mesmo', 'article' => '
                <p>Esse é um famoso aforismo ou dito popular grego que se encontra no pórtico de entrada do templo do deus Apolo, na cidade de Delfos, na Grécia, século IV a.C.</p>

                <p>Calma, não vou escrever sobre filosofia. Há estudiosos e professores excelentes que se debruçam sobre essa temática maravilhosa. Na adolescência adorava as aulas de filosofia e sociologia, mas esse é assunto para outro dia.</p>

                <p>Recebi um pedido generoso de escrever aqui nesse espaço e a princípio duvidei da minha capacidade. Como quase tudo que me tira da minha zona de conforto. Mas cá estou me esforçando pra não só atender um pedido de uma amiga recente e querida, como também me desafiando a fazer algo que não fazia há muito tempo: escrever e me expor.</p>

                <p>Recebi elogios de professores no ensino fundamental e médio que gostavam das minhas redações e intervenções em sala de aula, mas sempre desacreditei de suas palavras, afinal um bom professor sempre incentiva o seu aluno a se esforçar e fazer sempre o seu melhor. Então sempre desconfiei e continuo desconfiada de elogios e incentivos gratuitos. E me pergunto: por quê?</p>

                <p>Aí vão algumas respostas: aprendi desde pequena que ser a melhor ou se destacar exige entrega, se expor mas também colocar o objetivo da perfeição como foco e se moldar a exigência dos outros. Foram anos tentando entrar em uma caixinha que não era minha e me distanciei da minha essência.</p>

                <p>O processo de reconhecer que eu não estava bem demorou, mas o primeiro alerta aconteceu após uma crise de síndrome do pânico em que eu não consegui sair da minha própria casa por uma semana, seguida de um pedido de afastamento do trabalho naquele período. Comecei a perceber que posso ter o controle da minha própria vida, mas isso desagradaria alguns. A sensação de liberdade ao dizer sim e não, sem sentimento de culpa (algo que sempre carreguei) é ótima e no momento ainda não consigo descrever, porque ainda estou aprendendo. Mesmo assim, resisti em procurar ajuda terapêutica profissional. Me descobri grávida e todos os esforços financeiros foram para a chegada de uma criança muito esperada.</p>

                <p>Após dois anos do nascimento da minha filha, uma depressão pós parto não identificada e mais uma crise de síndrome do pânico, consegui escutar o pedido do meu esposo para buscar ajuda médica na psicoterapia. As primeiras sessões são sempre muito dolorosas, porque queremos esquecer momentos difíceis da infância e adolescência. E hoje ficou comum culpar os pais. Tenho dificuldades para entender isso, mas novamente, aprender exige esforço. Minha terapeuta foi fundamental na minha redescoberta de mim mesma, das minhas fraquezas e forças. Não esqueço de sua fala tão respeitosa, amorosa para o meu eu que sempre negligenciou o próprio potencial, entretanto estava juntando os próprios cacos deixados pelo caminho.</p>

                <p>Esse relato não é uma propaganda do acompanhamento médico terapêutico, cada um encontra o seu despertar ou reconstrução por intermédio dos livros, da meditação, da crença religiosa ou estudo filosófico enfim, há inúmeras opções para todos os gostos e momentos. O ponto é que alguém muito especial, me viu perdida, caída e desesperançosa e não desistiu de mim. Me ajudou e continua ajudando a pavimentar e construir o meu caminho. Em certos momentos da vida entendi que você não consegue fazer isso sozinho e um ombro ou braço amigo e sem julgamentos torna-se fundamental para o êxito da caminhada e talvez te puxar literalmente pra cima. E como é maravilhoso ter uma parceria assim: nos momentos bons, sorrisos. Nas circunstâncias difíceis e dolorosas: paciência. E em todos os dias, fé, respeito e uma dose extra de coragem.</p>

                <p>Minha reconstrução passa por constatar o quanto de aprendiz ainda sou e o desejo contínuo de perseguir o novo, o diferente, o não descoberto ainda.</p>

                <p>Ahh, não posso deixar de esquecer: hoje tenho mais clareza do meu propósito e objetivo buscando o que me alimenta e já tenho colocado em prática. Acredito que posso, mesmo que timidamente fazer a diferença para as pessoas e também assim como muitos almejam ou sonham, deixar a minha pequena contribuição ao mundo.</p>

                <p>E você, conhece a si mesmo?</p>
           ', 'category_id' => '1', 'user_id' => '2',]);
            DB::table('posts')->insert(['title' => 'Conhece-te a ti mesmo', 'article' => '
                <p>Esse é um famoso aforismo ou dito popular grego que se encontra no pórtico de entrada do templo do deus Apolo, na cidade de Delfos, na Grécia, século IV a.C.</p>

                <p>Calma, não vou escrever sobre filosofia. Há estudiosos e professores excelentes que se debruçam sobre essa temática maravilhosa. Na adolescência adorava as aulas de filosofia e sociologia, mas esse é assunto para outro dia.</p>

                <p>Recebi um pedido generoso de escrever aqui nesse espaço e a princípio duvidei da minha capacidade. Como quase tudo que me tira da minha zona de conforto. Mas cá estou me esforçando pra não só atender um pedido de uma amiga recente e querida, como também me desafiando a fazer algo que não fazia há muito tempo: escrever e me expor.</p>

                <p>Recebi elogios de professores no ensino fundamental e médio que gostavam das minhas redações e intervenções em sala de aula, mas sempre desacreditei de suas palavras, afinal um bom professor sempre incentiva o seu aluno a se esforçar e fazer sempre o seu melhor. Então sempre desconfiei e continuo desconfiada de elogios e incentivos gratuitos. E me pergunto: por quê?</p>

                <p>Aí vão algumas respostas: aprendi desde pequena que ser a melhor ou se destacar exige entrega, se expor mas também colocar o objetivo da perfeição como foco e se moldar a exigência dos outros. Foram anos tentando entrar em uma caixinha que não era minha e me distanciei da minha essência.</p>

                <p>O processo de reconhecer que eu não estava bem demorou, mas o primeiro alerta aconteceu após uma crise de síndrome do pânico em que eu não consegui sair da minha própria casa por uma semana, seguida de um pedido de afastamento do trabalho naquele período. Comecei a perceber que posso ter o controle da minha própria vida, mas isso desagradaria alguns. A sensação de liberdade ao dizer sim e não, sem sentimento de culpa (algo que sempre carreguei) é ótima e no momento ainda não consigo descrever, porque ainda estou aprendendo. Mesmo assim, resisti em procurar ajuda terapêutica profissional. Me descobri grávida e todos os esforços financeiros foram para a chegada de uma criança muito esperada.</p>

                <p>Após dois anos do nascimento da minha filha, uma depressão pós parto não identificada e mais uma crise de síndrome do pânico, consegui escutar o pedido do meu esposo para buscar ajuda médica na psicoterapia. As primeiras sessões são sempre muito dolorosas, porque queremos esquecer momentos difíceis da infância e adolescência. E hoje ficou comum culpar os pais. Tenho dificuldades para entender isso, mas novamente, aprender exige esforço. Minha terapeuta foi fundamental na minha redescoberta de mim mesma, das minhas fraquezas e forças. Não esqueço de sua fala tão respeitosa, amorosa para o meu eu que sempre negligenciou o próprio potencial, entretanto estava juntando os próprios cacos deixados pelo caminho.</p>

                <p>Esse relato não é uma propaganda do acompanhamento médico terapêutico, cada um encontra o seu despertar ou reconstrução por intermédio dos livros, da meditação, da crença religiosa ou estudo filosófico enfim, há inúmeras opções para todos os gostos e momentos. O ponto é que alguém muito especial, me viu perdida, caída e desesperançosa e não desistiu de mim. Me ajudou e continua ajudando a pavimentar e construir o meu caminho. Em certos momentos da vida entendi que você não consegue fazer isso sozinho e um ombro ou braço amigo e sem julgamentos torna-se fundamental para o êxito da caminhada e talvez te puxar literalmente pra cima. E como é maravilhoso ter uma parceria assim: nos momentos bons, sorrisos. Nas circunstâncias difíceis e dolorosas: paciência. E em todos os dias, fé, respeito e uma dose extra de coragem.</p>

                <p>Minha reconstrução passa por constatar o quanto de aprendiz ainda sou e o desejo contínuo de perseguir o novo, o diferente, o não descoberto ainda.</p>

                <p>Ahh, não posso deixar de esquecer: hoje tenho mais clareza do meu propósito e objetivo buscando o que me alimenta e já tenho colocado em prática. Acredito que posso, mesmo que timidamente fazer a diferença para as pessoas e também assim como muitos almejam ou sonham, deixar a minha pequena contribuição ao mundo.</p>

                <p>E você, conhece a si mesmo?</p>
           ', 'category_id' => '1', 'user_id' => '2',]);
        }
    }
}
