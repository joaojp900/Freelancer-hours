<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
                'title' => 'Plataforma de Conexão entre Freela',

                'description' =>  'Descrição: Desenvolvimento de uma plataforma web que conecta freelancers a clientes em busca de serviços digitais. A plataforma permitirá que clientes postem suas necessidades e freelancers enviem propostas personalizadas. O projeto inclui a criação de um sistema de cadastro para ambas as partes, com perfis detalhados que apresentam portfólios, avaliações e histórico de trabalhos concluídos. Além disso, será implementada uma área de mensagens internas para facilitar a comunicação entre cliente e freelancer.

                A plataforma contará com um sistema de pagamento integrado, que garantirá a segurança das transações, com retenção do valor até a conclusão e aprovação do serviço pelo cliente. Outras funcionalidades incluem filtros de busca avançada, categorização por especialidade, e notificações por e-mail e no painel do usuário.

                O design será responsivo, proporcionando uma experiência fluida tanto em dispositivos móveis quanto em desktops. Utilizando Laravel no backend para garantir escalabilidade e Vue.js no frontend para uma interface interativa, o projeto visa ser seguro, eficiente e de fácil manutenção.

                Prazo estimado de entrega: 8 semanas.',

                'ends_at' => fake()->dateTimeBetween('now', '+ 3 days'),

                'status' => fake()->randomElement(['open', 'closed']),

                'tech_stack' => fake()->randomElements(['react',  'Vite', 'nodejs','nextjs','Javascript' ], random_int(1,5)),

                'created_by' => User::factory(),
            ];
    }
}
