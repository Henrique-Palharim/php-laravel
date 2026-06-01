@extends('layout.site')

@section('conteudo')
<div class="home-container">
    <h1 class="home-title">Painel de Controle</h1>
    <p class="home-subtitle">Selecione uma das opções abaixo para gerenciar o sistema:</p>

    <div class="cards-grid">
        <a href="{{ route('admin.alunos') }}" class="card-link">
            <div class="card card-alunos">
                <div class="card-icon">🎓</div>
                <h2>Alunos</h2>
                <p>Gerenciar cadastros, matrículas e informações dos alunos.</p>
            </div>
        </a>

        <a href="{{ route('admin.cursos') }}" class="card-link">
            <div class="card card-cursos">
                <div class="card-icon">📚</div>
                <h2>Cursos</h2>
                <p>Gerenciar disciplinas, turmas e a grade curricular.</p>
            </div>
        </a>
    </div>
</div>

<style>
    /* Estilos para a tela home */
    .home-container {
        max-width: 1000px;
        margin: 40px auto;
        padding: 0 20px;
        text-align: center;
        font-family: Arial, sans-serif;
    }

    .home-title {
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 10px;
    }

    .home-subtitle {
        font-size: 1.1rem;
        color: #666;
        margin-bottom: 40px;
    }

    .cards-grid {
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
    }

    .card-link {
        text-decoration: none;
        color: inherit;
        flex: 1;
        max-width: 300px;
        min-width: 250px;
    }

    .card {
        background: #ffffff;
        border: 1px solid #e0e0e0;
        border-radius: 12px;
        padding: 30px 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        cursor: pointer;
        height: 100%;
        box-sizing: border-box;
    }

    /* Efeito de passar o mouse (Hover) */
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    .card-alunos:hover {
        border-color: #3498db;
    }

    .card-cursos:hover {
        border-color: #2ecc71;
    }

    .card-icon {
        font-size: 3.5rem;
        margin-bottom: 15px;
    }

    .card h2 {
        font-size: 1.5rem;
        margin: 10px 0;
        color: #2c3e50;
    }

    .card p {
        font-size: 0.95rem;
        color: #7f8c8d;
        line-height: 1.4;
    }
</style>
@endsection