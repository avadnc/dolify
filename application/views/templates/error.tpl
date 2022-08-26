{extends file="layout/main.layout.tpl"}

{block name=pageTitle}Error {$error}{/block}

{block name=page}
	{if $error eq "401"}

		{include file="error/error_401.tpl"}

	{/if}
	{if $error eq "404"}

		{include file="error/error_404.tpl"}

	{/if}
	{if $error eq "500"}

		{include file="error/error_500.tpl"}

	{/if}
{/block}
