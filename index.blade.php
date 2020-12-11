@extends('base') @section('main')
    <div class="row">
        <div class="col-sm-12">
	    @if(session()->get('success'))
		<div class="alert alert-success">
		    {{ session()->get('success') }}
		</div>
	    @endif
            <h1 class="display-3">
	        Characters
	    </h1>
	    <div>
		<a style="margin: 20px;" href="{{ route('contacts.create') }}" class="btn btn-primary">
		    New Character:
		</a>
	    </div>
	    <table class="table table-striped">
	        <thead>
	            <tr>
		        <td>
		            ID
			</td>
			<td>
			    Name
			</td>
			<td>
			    Race
			</td>
			<td>
			    Class
			</td>
			<td>
			    Level
			</td>
			<td>
			    HP
			</td>
			<td>
			    AC
			</td>
			<td>
			    Strength
			</td>
			<td>
			    Dexterity
			</td>
			<td>
			    Constitution
			</td>
			<td>
			    Intelligence
			</td>
			<td>
			    Wisdom
			</td>
			<td>
			    Charisma
			</td>
			<td>
			    Skills
			</td>
			<td>
			    Weapons
			</td>
			<td>
			    Equipment
			</td>
			<td>
			    Spells
			</td>
			<td colspan = 2>
			    Actions
			</td>
		    </tr>
		</thead>
		<tbody>
		    @foreach($contacts as $contact)
		        <tr>
		            <td>
			        {{$contact->id}}
			    </td>
		            <td>
			        {{$contact->name}}
			    </td>
		            <td>
			        {{$contact->race}}
			    </td>
		            <td>
			        {{$contact->class}}
			    </td>
		            <td>
			        {{$contact->level}}
			    </td>
		            <td>
			        {{$contact->hp}}
			    </td>
			    <td>
				{{$contact->ac}}
			    </td>
			    <td>
				{{$contact->str}}
			    </td>
			    <td>
				{{$contact->dex}}
			    </td>
			    <td>
				{{$contact->con}}
			    </td>
			    <td>
				{{$contact->'int'}}
			    </td>
			    <td>
				{{$contact->wis}}
			    </td>
			    <td>
				{{$contact->cha}}
			    </td>
			    <td>
				{{$contact->skills}}
			    </td>
			    <td>
				{{$contact->weapons}}
			    </td>
			    <td>
				{{$contact->equipment}}
			    </td>
			    <td>
				{{$contact->spells}}
			    </td>
		            <td>
		                <a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">
			            Edit
				</a>
		            </td>
		            <td>
		                <form action="{{ route('contacts.destroy', $contact->id)}}" method="post"> @csrf @method('DELETE')
			            <button class="btn btn-danger" type="submit">
				        Delete
				    </button>
		                </form>
		            </td>
	                </tr>
	            @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
