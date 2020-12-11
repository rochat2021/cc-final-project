@extends('base') @section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">
		Update a Character
	    </h1>
	    @if ($errors->any())
	        <div class="alert alert-danger">
		    <ul>
			@foreach ($errors->all() as $error)
                            <li>
				{{ $error }}
			    </li>
	                @endforeach
	            </ul>
	        </div>
	        <br />
            @endif
            <form method="post" action="{{ route('contacts.update', $contact->id) }}"> @method('PATCH') @csrf
		<div class="form-group">
		    <label for="name">
			Name:
		    </label>
                    <input type="text" class="form-control" name="name" value={{ $contact->name }} />
                </div>
                <div class="form-group">
                    <label for="race">
			Race:
		    </label>
                    <input type="text" class="form-control" name="race" value={{ $contact->race }} />
                </div>
                <div class="form-group">
                    <label for="class">
			Class:
		    </label>
                    <input type="text" class="form-control" name="class" value={{ $contact->class }} />
                </div>
                <div class="form-group">
                    <label for="level">
			Level:
		    </label>
                    <input type="number" class="form-control" name="level" value={{ $contact->level }} />
                </div>
                <div class="form-group">
                    <label for="hp">
			Hit Points:
		    </label>
                    <input type="number" class="form-control" name="hp" value={{ $contact->hp }} />
                </div>
                <div class="form-group">
                    <label for="ac">
			Armor Class:
		    </label>
                    <input type="number" class="form-control" name="ac" value={{ $contact->ac }} />
                </div>
                <div class="form-group">
                    <label for="str">
                        Strength:
                    </label>
                    <input type="number" class="form-control" name="str" value={{ $contact->str }} />
                </div>
                <div class="form-group">
                    <label for="dex">
                        Dexterity:
                    </label>
                    <input type="number" class="form-control" name="dex" value={{ $contact->dex }} />
                </div>
                <div class="form-group">
                    <label for="con">
                        Constitution:
                    </label>
                    <input type="number" class="form-control" name="con" value={{ $contact->con }} />
                </div>
                <div class="form-group">
                    <label for="int">
                        Intelligence:
                    </label>
                    <input type="number" class="form-control" name="int" value={{ $contact->int }} />
                </div>
                <div class="form-group">
                    <label for="wis">
                        Wisdom:
                    </label>
                    <input type="number" class="form-control" name="wis" value={{ $contact->wis }} />
                </div>
                <div class="form-group">
                    <label for="cha">
                        Charisma:
                    </label>
                    <input type="number" class="form-control" name="cha" value={{ $contact->cha }} />
                </div>
                <div class="form-group">
                    <label for="skills">
                        Level:
                    </label>
                    <input type="text" class="form-control" name="skills" value={{ $contact->skills }} />
                </div>
                <div class="form-group">
                    <label for="weapons">
                        Weapons:
                    </label>
                    <input type="text" class="form-control" name="weapons" value={{ $contact->weapons }} />
                </div>
                <div class="form-group">
                    <label for="equipment">
                        Equipment:
                    </label>
                    <input type="number" class="form-control" name="equipment" value={{ $contact->equipment }} />
                </div>
                <div class="form-group">
                    <label for="spells">
                        Spells:
                    </label>
                    <input type="number" class="form-control" name="spells" value={{ $contact->spells }} />
                </div>
                <button type="submit" class="btn btn-primary">
	            Update
		</button>
	    </form>
        </div>
    </div>
@endsection

