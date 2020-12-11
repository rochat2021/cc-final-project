@extends('base')@section('main')
    <div class="row">
	<div class="col-sm-8 offset-sm-2">
	    <h1 class="display-3">
		Create a new character
	    </h1>
	    <div>
		@if ($errors->any())
		    <div class="Warning: Error(s)">
			<ul>
			    @forreach ($errors->all() as $error)
				<li>
				    {{ $error }}
				</li>
			    @endforeach
			</ul>
		    </div>
		    <br />
		@endif
		<form method="post" action"{{ route('contacts.store') }}">
		    @csrf
			<div class="form-group">
			    <label for="name">
				Name:
			    </label>
			    <input type="text" class="form-control" name="name"/>
			</div>
                        <div class="form-group">
                            <label for="race">
                                Race:
                            </label>
                            <input type="text" class="form-control" name="race"/>
                        </div>
                        <div class="form-group">
                            <label for="class">
                                Class:
                            </label>
                            <input type="text" class="form-control" name="class"/>
                        </div>
                        <div class="form-group">
                            <label for="level">
                                Level:
                            </label>
                            <input type="number" class="form-control" name="level"/>
                        </div>
                        <div class="form-group">
                            <label for="hp">
                                Hit Points:
                            </label>
                            <input type="number" class="form-control" name="hp"/>
                        </div>
                        <div class="form-group">
                            <label for="ac">
                                Armor Class:
                            </label>
                            <input type="number" class="form-control" name="ac"/>
                        </div>
                        <div class="form-group">
                            <label for="str">
                                Strength:
                            </label>
                            <input type="number" class="form-control" name="str"/>
                        </div>
                        <div class="form-group">
                            <label for="dex">
                                Dexterity:
                            </label>
                            <input type="number" class="form-control" name="dex"/>
                        </div>
                        <div class="form-group">
                            <label for="con">
                                Constitution:
                            </label>
                            <input type="number" class="form-control" name="con"/>
                        </div>
                        <div class="form-group">
                            <label for="int">
                                Intelligence:
                            </label>
                            <input type="number" class="form-control" name="int"/>
                        </div>
                        <div class="form-group">
                            <label for="wis">
                                Wisdom:
                            </label>
                            <input type="number" class="form-control" name="wis"/>
                        </div>
                        <div class="form-group">
                            <label for="cha">
                                Charisma:
                            </label>
                            <input type="number" class="form-control" name="cha"/>
                        </div>
			<button type="submit" class="btn btn-primary-outline">
			    Create Character
			</button
		</form>
	    </div>
	</div>
    </div>
@endsection
