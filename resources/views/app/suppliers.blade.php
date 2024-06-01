@isset($suppliers)
    @forelse($suppliers as $index => $supplier)
        Iteração: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $supplier['name'] }}
        <br>
        Status: {{ $supplier['status'] }}
        <br>
        CNPJ: {{ $supplier['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $supplier['ddd'] ?? ''}}) {{ $supplier['phone_number'] ?? ''}}
        <br>
        @if ({{ $loop->first }})
            Primeiro fornecedor
        @endif
        @if ({{ $loop->last }})
            Último fornecedor
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados
    @endforelse
@endisset
